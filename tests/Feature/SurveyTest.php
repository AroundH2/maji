<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\SurveyQuestion;
use App\Models\SurveyResponse;

class SurveyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * アンケートフォームが表示されるかをテスト
     */
    public function testSurveyFormDisplaysCorrectly()
    {
        // データを作成
        SurveyQuestion::factory()->create(['question' => 'あなたの一番好きな映画は何ですか？']);

        // アンケートフォームの表示を確認
        $response = $this->get('/');
        $response->assertStatus(200);  // ページが正しく表示されることを確認
        $response->assertSee('あなたの一番好きな映画は何ですか？');  // 質問が表示されていることを確認
    }

    /**
     * 回答を送信した後に正しくリダイレクトされ、回答が保存されるかをテスト
     */
    public function testSurveyResponseSubmission()
    {
        // データを作成
        $question = SurveyQuestion::factory()->create(['question' => 'あなたの一番好きな映画は何ですか？']);

        // POSTリクエストを送信
        $response = $this->post('/', [
            'responses' => [
                $question->id => 'インセプション'
            ]
        ]);

        // 正しくリダイレクトされることを確認
        $response->assertRedirect('/survey');
        
        // データベースに回答が保存されていることを確認
        $this->assertDatabaseHas('survey_responses', [
            'question_id' => $question->id,
            'response' => 'インセプション'
        ]);
    }

    /**
     * アンケートの集計結果が正しく表示されるかをテスト
     */
    public function testSurveyResultsDisplayCorrectly()
    {
        // データを作成
        $question = SurveyQuestion::factory()->create(['question' => 'あなたの一番好きな映画は何ですか？']);
        SurveyResponse::factory()->create([
            'question_id' => $question->id,
            'response' => 'インセプション'
        ]);

        // 集計結果ページを表示
        $response = $this->get('/survey');
        $response->assertStatus(200);  // ページが正しく表示されることを確認
        $response->assertSee('インセプション');  // 回答が表示されていることを確認
        $response->assertSee('回答数: 1');  // 回答数が正しく表示されていることを確認
    }
}

<?php

namespace Database\Factories;

use App\Models\SurveyResponse;
use App\Models\SurveyQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

class SurveyResponseFactory extends Factory
{
    protected $model = SurveyResponse::class;

    public function definition()
    {
        return [
            'question_id' => SurveyQuestion::factory(),  // 関連する質問を自動生成
            'response' => $this->faker->word(),  // ダミーの回答を生成
        ];
    }
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SurveyQuestion;
use App\Models\SurveyResponse;

class SurveySeeder extends Seeder
{
    public function run()
    {
        SurveyQuestion::updateOrCreate(
            ['question' => 'あなたの一番好きな映画は何ですか？(例:インセプション)'],
            ['question' => 'あなたの一番好きな映画は何ですか？(例:インセプション)']
        );

        SurveyQuestion::updateOrCreate(
            ['question' => 'あなたの一番好きなアニメは何ですか？正式名称でお願いします(例:僕のヒーローアカデミア)'],
            ['question' => 'あなたの一番好きなアニメは何ですか？正式名称でお願いします(例:僕のヒーローアカデミア)']
        );

        SurveyQuestion::updateOrCreate(
            ['question' => 'あなたの一番好きなゲームは何ですか？正式名称でお願いします(例:崩壊スターレイル)'],
            ['question' => 'あなたの一番好きなゲームは何ですか？正式名称でお願いします(例:崩壊スターレイル)']
        );

        SurveyQuestion::updateOrCreate(
            ['question' => 'あなたの一番好きな曲は何ですか？正式名称でお願いします(例:斜陽)'],
            ['question' => 'あなたの一番好きな曲は何ですか？正式名称でお願いします(例:斜陽)']
        );
        /*SurveyQuestion::updateOrCreate(
            ['question' => 'あなたの一番好きなonngakuは何ですか？正式名称でお願いします(例:斜陽)'],
            ['question' => 'あなたの一番好きなonngakuは何ですか？正式名称でお願いします(例:斜陽)']
        );*/

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SurveyQuestion;

class SurveySeeder extends Seeder
{
    public function run()
    {
        SurveyQuestion::create(['question' => 'あなたの好きな色は何ですか？']);
        SurveyQuestion::create(['question' => 'あなたの趣味は何ですか？']);
    }
}

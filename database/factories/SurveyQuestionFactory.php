<?php

namespace Database\Factories;

use App\Models\SurveyQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

class SurveyQuestionFactory extends Factory
{
    protected $model = SurveyQuestion::class;

    public function definition()
    {
        return [
            'question' => $this->faker->sentence(),  // ダミーの質問を生成
        ];
    }
}



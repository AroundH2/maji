<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyQuestion;
use App\Models\SurveyResponse;

class SurveyController extends Controller
{
    public function showForm()
    {
        $questions = SurveyQuestion::all();
        return view('survey.form', compact('questions'));
    }

    public function submitResponse(Request $request)
    {
        foreach ($request->responses as $question_id => $response) {
            SurveyResponse::create([
                'question_id' => $question_id,
                'response' => $response,
            ]);
        }

        return redirect()->back()->with('success', 'アンケートの回答ありがとうございました！');
    }
}


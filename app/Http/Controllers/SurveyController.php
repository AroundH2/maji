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

        return redirect('/survey');
    }

    public function showResults()
    {
        $questions = SurveyQuestion::with(['responses' => function($query) {
        $query->selectRaw('question_id, response, COUNT(*) as count')
              ->groupBy('question_id', 'response');
        }])->get();

        return view('survey.results', compact('questions'));
    }
}


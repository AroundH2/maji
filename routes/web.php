<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/survey', [SurveyController::class, 'showResults']);  // 集計結果を表示
Route::post('/', [SurveyController::class, 'submitResponse']);  // 回答を保存
Route::get('/', [SurveyController::class, 'showForm']);  // アンケートフォームを表示

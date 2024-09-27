<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [SurveyController::class, 'showForm']);
Route::post('/', [SurveyController::class, 'submitResponse']);

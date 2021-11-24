<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
Route::any('exampage', function () {
    return view('exampage');
});

Route::get('questions',[QuestionController::class,'show']);

Route::any('start', function () {
    return view('start');
});
Route::any('end', function () {
    return view('end');
});
Route::any('addquestion', function () {
    return view('addquestion');
});

//Route::any('add','QuestionController@add');
Route::post('add',[QuestionController::class,'add']);
//Route::get('update/{id}',[QuestionController::class,'update']);
Route::get('edit/{id}',[QuestionController::class,'edit']);
Route::post('update/{id}',[QuestionController::class,'update']);
Route::get('delete/{id}',[QuestionController::class,'delete']);
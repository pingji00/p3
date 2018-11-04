<?php

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

Route::get('/','CalorieCalc@index');

Route::get('/calc','CalorieCalc@calc');
Route::get('/checkform', 'CalorieCalc@checkAnswer');

//Route::get('/','FormController@checkAnswer');
Route::view('/contact', 'calc/contact');
Route::view('/about', 'calc/about');

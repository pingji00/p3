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
Route::get('/calc-process', 'CalorieCalc@calcProcess');

//Route::get('/','FormController@checkAnswer');
Route::view('/contact', 'calc/contact');
Route::view('/about', 'calc/about');


Route::get('/books/search', 'BookController@search'); # <-- NEW 1 of 2
Route::get('/books/search-process', 'BookController@searchProcess'); # <-- NEW 2 of 2
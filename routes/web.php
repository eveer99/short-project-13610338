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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'ShortController@index');

Route::get('/new', 'ShortController@create');
Route::post('/save', 'ShortController@store');
Route::get('/gt/{code}', 'ShortController@check');

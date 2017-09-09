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

Route::get('/', 		'HomeController@index');
Route::get('/send', 	'HomeController@send');
Route::get('/receive', 	'HomeController@receive');
Route::get('/show', 	'HomeController@show');
Route::post('/link', 	'HomeController@link');

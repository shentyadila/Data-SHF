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

// Route::get('/', function () {
//     return view('welcome');
// });

//No 9
Route::get('/','UserController@index');
Route::get('/detail','UserController@index2');

//No 10
Route::get('/dashboard','TemplateController@index3');
Route::get('/dashboard2','TemplateController@index4');


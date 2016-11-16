<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','PostController@index');

Route::get('/delete/{id}', 'PostController@destory');

Route::get('/home','PostController@index');

Route::get('/new', 'PostController@create');

Route::post('/store', 'PostController@store');

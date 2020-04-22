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

Route::get('/', 'PostController@index')->name("list");
Route::get('/minor', 'HomeController@minor')->name("minor");
Route::get('/logout', 'Auth\LoginController@logout')->name("logout");
Route::post('/posts', 'PostController@store')->name("posts");
Route::get('/list', 'PostController@list')->name("list");
Route::post('/comment', 'CommentController@store')->name("comment");

Auth::routes();

Route::get('/post', 'PostController@index');

Route::resource('post','PostController');

Auth::routes();

Route::get('/landing', 'HomeController@landing')->name("landing");



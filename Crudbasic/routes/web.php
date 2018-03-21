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

Route::get('/', function () {
    return view('welcome');
});

Route::get('siswa', 'SiswaController@index');

Route::get('siswa/create', 'SiswaController@create');
Route::post('siswa/create', 'SiswaController@save');

Route::get('siswa/edit/{id}', 'SiswaController@edit');
Route::post('siswa/edit', 'SiswaController@update');

Route::get('siswa/delete/{id}', 'SiswaController@delete');

Route::get('siswa/search', 'SiswaController@search');

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
Route::get('logout', function() {
	Auth::logout();
	return redirect(url('login'));
});

Route::get('user/profile', 'UserController@getProfile');
Route::post('user/profile', 'UserController@postProfile');
Route::get('user/password', 'UserController@getPassword');
Route::post('user/password', 'UserController@postPassword');

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

//まだコントローラー作ってない
Route::get('/', 'QuizzesController@index');

// user registration
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// Login authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//まだコントローラーない
Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::resource('quizzes', 'QuizzesController', ['only' => ['store', 'show','destroy']]);
});

//trying to see questions
Route::group(['middleware' => ['auth']], function () {
    Route::get('questions/{id}', 'QuizzesController@action')->name('quizzes.questions');
});

//route to quizzes.create to make a page to 'make a new quiz'
Route::group(['middleware' => ['auth']], function () {
    Route::get('newquiz/{id}', 'QuizzesController@create')->name('quizzes.create');
});
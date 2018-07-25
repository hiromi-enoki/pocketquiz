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
    Route::resource('quizzes', 'QuizzesController', ['only' => ['store', 'show','destroy' ]]);
});


//route to quizzes.create to make a page to 'make a new quiz'
Route::group(['middleware' => ['auth']], function () {
    Route::resource('quizzes', 'QuizzesController');
    Route::get('newquiz', 'QuizzesController@create')->name('quizzes.create');
    Route::get('newquestion/{quiz}', 'QuizzesController@createquestion')->name('quizzes.createquestion');
    Route::post('newquestion', 'QuizzesController@storequestion')->name('quizzes.storequestion');
    Route::delete('deletequestion/{id}', 'QuizzesController@destroyquestion')->name('quizzes.destroyquestion');
    Route::get('confirmquestion', 'QuizzesController@createconfirm')->name('quizzes.createcomfirm');
    
    Route::get('editquestion/{id}', 'QuizzesController@editquestion')->name('quizzes.editquestion');
    Route::put('editquestion/{id}', 'QuizzesController@updatequestion')->name('quizzes.updatequestion');
    Route::get('confirmedit', 'QuizzesController@editconfirm')->name('quizzes.editcomfirm');
});


Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('favorite', 'UserFavoriteController@store')->name('user.favorite');
        Route::delete('unfavorite', 'UserFavoriteController@destroy')->name('user.unfavorite');
        Route::get('favoritings', 'UsersController@favoritings')->name('users.favoritings');
        
    });

    Route::resource('quizzes', 'QuizzesController', ['only' => ['store', 'destroy']]);
});


// route to quizzes.mypage
Route::get('mypage/{id}', 'UsersController@mypage')->name('users.mypage');

// route to users.mypage&users.myquestion
Route::get('mypage/{id}', 'UsersController@mypage')->name('users.mypage');
Route::get('myquestions/{id}', 'UsersController@myquestion')->name('users.myquestion');


// route to serch function
Route::get('/search','SearchController@getIndex')->name('quiz.search');

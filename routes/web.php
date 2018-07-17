<?php


Route::get('/', function () {
    return view('welcome');
});

//sign up
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

//login logout
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//movie一覧
Route::group(['middleware' => ['auth']], function () {
   Route::get('show', 'MoviesController@show')->name('show.get');
});


//thater一覧
Route::group(['middleware' => ['auth']], function () {
   Route::get('theater{code}', 'TheaterController@show')->name('theater.get');
});

;

//want機能
Route::group(['middleware' => ['auth']], function () {
    Route::resource('movies', 'MoviesController', ['only' => ['create', 'show']]);
    Route::post('want', 'MovieUserController@want')->name('movie_user.want');
    Route::delete('want', 'MovieUserController@dont_want')->name('movie_user.dont_want');
    Route::resource('users', 'UsersController', ['only' => ['show']]);
});

//プロフィール
Route::group(['middleware' => ['auth']], function () {
   Route::get('profile{id}', 'ProfileController@show')->name('profile.get');
});

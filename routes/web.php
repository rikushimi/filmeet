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
   Route::get('theater1', 'TheaterController@show1')->name('theater1.get');
   Route::get('theater2', 'TheaterController@show2')->name('theater2.get');
   Route::get('theater3', 'TheaterController@show3')->name('theater3.get');
   Route::get('theater4', 'TheaterController@show4')->name('theater4.get');
});

//date一覧
Route::group(['middleware' => ['auth']], function () {
   Route::get('time', 'TimeController@show')->name('time.get');
   Route::get('time1', 'TimeController@show1')->name('time1.get');
   Route::get('time2', 'TimeController@show2')->name('time2.get');
   Route::get('time3', 'TimeController@show3')->name('time3.get');
   Route::get('time4', 'TimeController@show4')->name('time4.get');
});

//want機能
Route::group(['middleware' => ['auth']], function () {
    Route::resource('movies', 'MoviesController', ['only' => ['create', 'show']]);
    Route::post('want', 'MovieUserController@want')->name('movie_user.want');
    Route::delete('want', 'MovieUserController@dont_want')->name('movie_user.dont_want');
    Route::resource('users', 'UsersController', ['only' => ['show']]);
});


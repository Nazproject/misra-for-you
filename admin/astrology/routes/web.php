<?php
Route::view('/', 'home');
Auth::routes();
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
//Route::get('/login/blogger', 'Auth\LoginController@showBloggerLoginForm');
///Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
//Route::get('/register/blogger', 'Auth\RegisterController@showBloggerRegisterForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
//Route::post('/login/blogger', 'Auth\LoginController@bloggerLogin');
///Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
//Route::post('/register/blogger', 'Auth\RegisterController@createBlogger');
//Route::view('/home', 'home')->middleware('auth');
Route::get('/home', 'HomeController@index');
Route::get('/horoscope/{slug}', 'HoroscopeController@index');
Route::get('/horoscopes/{type}', 'HoroscopeController@horoscopebytype');
Route::group(['prefix' => 'admin'], function() {
	Route::get('/', 'AdminController@index');

	Route::group(['prefix' => 'horoscope'], function() {
		Route::get('/{slug}', 'admin\HoroscopeController@index');
		Route::get('/create/{slug}', 'admin\HoroscopeController@create');
		Route::post('/store/{slug}', 'admin\HoroscopeController@store');
		Route::get('/edit/{id}/{slug}', 'admin\HoroscopeController@edit');
		Route::post('/update/{slug}', 'admin\HoroscopeController@update');
		Route::get('/delete/{id}', 'admin\HoroscopeController@destroy');
	});


});	
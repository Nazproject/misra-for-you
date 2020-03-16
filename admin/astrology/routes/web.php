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

Route::group(['prefix' => 'admin'], function() {
	Route::get('/', 'AdminController@index');

	Route::group(['prefix' => 'horoscope'], function() {
		Route::get('/{slug}', 'HoroscopeController@index');
		Route::get('/create/{slug}', 'HoroscopeController@create');
		Route::post('/store/{slug}', 'HoroscopeController@store');
		Route::get('/edit/{id}/{slug}', 'HoroscopeController@edit');
		Route::post('/update/{slug}', 'HoroscopeController@update');
		Route::post('/delete/{slug}', 'HoroscopeController@store');
	});


});	
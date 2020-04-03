<?php
//Route::redirect('/', 'en');
//Route::group(['prefix' => '{language}'], function() {//new
Route::view('/', 'home');
Auth::routes();
//Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm');

//Route::get('/login/blogger', 'Auth\LoginController@showBloggerLoginForm');
///Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
//Route::get('/register/blogger', 'Auth\RegisterController@showBloggerRegisterForm');
//Route::post('/admin/login', 'Auth\LoginController@adminLogin');
//Route::post('/login/blogger', 'Auth\LoginController@bloggerLogin');
///Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
//Route::post('/register/blogger', 'Auth\RegisterController@createBlogger');
//Route::view('/home', 'home')->middleware('auth');

Route::get('/horoscope/{slug}', 'HoroscopeController@index');
Route::get('/horoscope/{type}/{slug}', 'HoroscopeController@horoscopebytypefetch');
Route::get('/zodiac/{special}/{slug}', 'HoroscopeController@horospecial');

Route::get('/horoscopes/{type}/{slug?}', 'HoroscopeController@horoscopebytype');
Route::post('/message', 'MessageController@index');
Route::get('/home', 'HomeController@index');



	
Route::group(['prefix' => 'admin'], function() {
  Route::get('/category', 'admin\CategoryController@index')->name('admin.category');
  Route::get('/category/create', 'admin\CategoryController@create')->name('admin.category.create');
  Route::post('/category/store', 'admin\CategoryController@store')->name('admin.category.store');
  Route::get('/category/edit/{id}', 'admin\CategoryController@edit')->name('admin.category.edit');
  Route::post('/category/update/{id}', 'admin\CategoryController@update')->name('admin.category.update');
  Route::get('category/delete/{id}', 'admin\CategoryController@destroy')->name('admin.category.delete');

  Route::get('/message/delete/{id}', 'admin\MessageController@destroy');
  Route::get('/message', 'admin\MessageController@index')->name('admin.message');
  Route::group(['prefix' => 'horoscope'], function() {	
	Route::get('/create/{slug}', 'admin\HoroscopeController@create');
	Route::post('/store/{slug}', 'admin\HoroscopeController@store');
	Route::get('/edit/{id}/{slug}', 'admin\HoroscopeController@edit');
	Route::post('/update/{slug}', 'admin\HoroscopeController@update');
	Route::get('/delete/{id}', 'admin\HoroscopeController@destroy');
	Route::get('/{slug}', 'admin\HoroscopeController@index');
  });
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
//});		



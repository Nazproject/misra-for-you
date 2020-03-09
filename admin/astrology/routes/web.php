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

Route::get('/admin', 'AdminController@index');
//Route::view('/blogger', 'blogger');

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

/*
|--------------------------------------------------------------------------
| the admin multiple auth setting is done from 
| https://lavalite.org/blog/multiple-authentication-in-laravel
|--------------------------------------------------------------------------
*/



Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::middleware('auth')->get('/home', 'HomeController@index')->name('home');





// Authentication Routes...
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::post('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

Route::get('admin/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register', 'Auth\AdminRegisterController@register')->name('admin.register');

Route::middleware('auth:admin')->get('admin/home','HomeController@admin')->name('admin.home');





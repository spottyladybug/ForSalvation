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

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/donor', 'ProfileController@donor')->name('donor.profile');
Route::get('/doc', 'ProfileController@doсtor')->name('doсtor.profile');

// OAuth Routes
// Route::get('/login/vkontakte', 'Auth\LoginController@redirectToProvider')->name('login');
// Route::get('/callback', 'Auth\LoginController@handleProviderCallback')->name('callback');

// Route::post('/register', 'Auth\RegisterController@register')->name('register');

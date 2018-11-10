<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('donor')->resource('/donor', 'DoctorController', [
    'except' => ['edit', 'show']
]);

Route::get('test', 'HospitalController@index');

Route::get('test2', 'HospitalController@schedule');

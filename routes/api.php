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

Route::resource('/donor', 'DonorController');

Route::resource('/hospital', 'HospitalController');

Route::resource('/schedule', 'ScheduleController');

Route::resource('/doctor', 'DoctorController');

Route::get('/getSchedule', 'HospitalController@getSchedule');

Route::post('/setApproval', 'DonorController@setApproval');

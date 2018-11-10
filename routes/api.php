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

Route::resource('/donor', 'DonorController', [
    'except' => ['edit', 'show']
]);

Route::resource('/hospital', 'HospitalController', [
    'except' => ['edit', 'show']
]);

Route::resource('/schedule', 'ScheduleController', [
    'except' => ['show']
]);

Route::get('/getSchedule', 'HospitalController@getSchedule');

Route::post('/setApproval', 'DonorController@setApproval');

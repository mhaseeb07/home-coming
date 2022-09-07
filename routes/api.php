<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'middleware' => ['appAuth']], function () {
    //##### USER Management

    Route::post('login', 'API\User\LoginController@login');
    Route::delete('logout', 'API\User\LogoutController@logout');
    Route::get('user/{id}', 'API\User\UserController@getDetail');
    Route::get('user/{id}/perm', 'API\User\UserController@getPermissions');
    Route::get('user/{id}/config', 'API\User\UserController@getConfiguration');

    //##### Candidate
    Route::get('cdt/{id}', 'API\Candidate\CandidateController@getDetail');
    Route::get('cdt/{id}/atd', 'API\Candidate\AttendanceController@getDetail');
    Route::post('cdt/{id}/atd/inout', 'API\Candidate\AttendanceController@makeAttendance');

    //##### Regalia
    Route::get('cdt/{id}/regalia', 'API\Candidate\RegaliaController@getDetail');
    Route::post('cdt/{id}/regalia/return', 'API\Candidate\RegaliaController@return');

    //##### Guest
    Route::get('gst/{id}', 'API\Guest\GuestController@getdetail');
    Route::get('gst/{id}/atd', 'API\Guest\AttendanceController@getdetail');
    Route::post('gst/{id}/atd/inout', 'API\Guest\AttendanceController@makeAttendance');

});


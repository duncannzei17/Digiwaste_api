<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function(Request $request) {
    return $request->user();
});

Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');
Route::get('/user', 'UserController@getCurrentUser');
Route::get('/users', 'UserController@returnUsers');
Route::post('/update', 'UserController@update');
Route::get('/logout', 'UserController@logout');

Route::post('/userLocation', 'LocationController@store');
Route::get('/transporters', 'TransporterController@index');


Route::post('/addSchedule', 'ScheduleController@store');
Route::post('/searchUser', 'TransporterController@searchUser');
Route::post('/createTransporter', 'TransporterController@store');

Route::get('/showSchedules', 'CollectionController@index');
Route::post('/addCollection', 'CollectionController@store');



































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































<?php

use Illuminate\Http\Request;


Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');
Route::get('/user', 'UserController@getCurrentUser');
Route::get('/users', 'UserController@returnUsers');
Route::post('/update', 'UserController@update');
Route::get('/logout', 'UserController@logout');

Route::post('/userLocation', 'LocationController@store');


Route::post('/addSchedule', 'ScheduleController@store');
Route::post('/searchUser', 'TransporterController@index');
Route::post('/createTransporter', 'TransporterController@store');


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/TimeRecording', 'TimeRecordingController@index');
Route::post('/AddTimeRecording', 'TimeRecordingController@store');

Route::get('/Leave', 'LeaveController@index');
Route::post('/AddLeave', 'LeaveController@store');
Route::get('/TimeRecordingView', 'TimeRecordingController@ViewTime');
Route::get('/Add', 'AddController@index');







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
Route::get('/meetings', 'MeetingController@index')->name('meetings.index');
Route::post('/meetings', 'MeetingController@store')->name('meetings.store');
Route::get('/meetings/{id}/edit', 'MeetingController@edit')->name('meetings.edit');
Route::put('/meetings/{id}', 'MeetingController@update')->name('meetings.update');
Route::delete('/meetings/{id}', 'MeetingController@destroy')->name('meetings.destroy');
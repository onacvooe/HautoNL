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

//Route::get('/dashboard', function () {
//   return view('dashboard.roomsindex');
//});


Route::resource('/dashboard', 'RoomsController');
Route::resource('/dashboard/rooms', 'RoomsController');
Route::post('/dashboard/rooms/{room}/devs', 'RoomsDevsController@store');
Route::post('/dashboard/rooms/{room}/sensors', 'RoomsSensorsController@store');
//Route::get('/rooms', 'RoomsController@index');
//Route::get('/rooms/create', 'RoomsController@create');
//Route::get('/rooms/{room}', 'RoomsController@show');
//Route::post('/rooms', 'RoomsController@store');
//Route::get('/rooms/{room}/edit', 'RoomsController@edit');
//Route::patch('/rooms/{room}', 'RoomsController@update');
//Route::delete('/rooms/{room}', 'RoomsController@destroy');

Route::resource('/dashboard/devices', 'DevicesController');
//Route::get('/devices', 'DevicesController@index');
//Route::get('/devices/create', 'DevicesController@create');
//Route::get('/devices/{device}', 'DevicesController@show');
//Route::post('/devices', 'DevicesController@store');
//Route::get('/devices/{device}/edit', 'DevicesController@edit');
//Route::patch('/devices/{device}', 'DevicesController@update');
//Route::delete('/devices/{device}', 'DevicesController@destroy');

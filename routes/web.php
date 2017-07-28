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

// RESTful API
Route::get('/api/v1/users/{id?}', 'UserController@index');
Route::post('/api/v1/users', 'UserController@store');
Route::post('/api/v1/users/{id?}', 'UserController@update');
Route::delete('/api/v1/users/{id?}', 'UserController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@userMgn')->name('user');
Route::get('/kualitas', 'KualitasController@index')->name('kualitas');
Route::get('/laporan-user', 'LaporanController@index')->name('laporan');
Route::resource('user-crud', 'UserController');
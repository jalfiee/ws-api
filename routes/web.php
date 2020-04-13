<?php

use Illuminate\Support\Facades\Route;

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

// ###### API authed routes (middleware applied in controller's constructer)
Route::get('/api/v1/authed/test', 'API\v1\AuthedController@test')->name('authed.test');
Route::get('/api/v1/authed/notify', 'API\v1\AuthedController@notify')->name('authed.notify');

// ###### Auth routes
Route::get('/api/v1/auth/login', 'API\v1\AuthController@login')->name('auth.login');
Route::get('/api/v1/auth/logout', 'API\v1\AuthController@logout')->name('auth.logout');
Route::get('/api/v1/auth/status', 'API\v1\AuthController@status')->name('auth.status');

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('smartmeter', 'Auth\LoginController@showLoginForm')->name('smartmeter.page');
Route::get('/', 'Auth\LoginController@showLoginForm')->name('home.page');

Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm')->name('home.page');
Route::get('/dashboard', 'account\appController@dashboard')->name('dashboard');
Route::get('/add-meter', 'account\appController@addMeter')->name('add-meter');
Route::post('/submit-meter', 'account\appController@submitMeter')->name('submit-meter');





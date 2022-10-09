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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\HomeController@homepage')->name('home');
Route::get('pending','App\Http\Controllers\HomeController@pending')->name('pending');
Route::get('completed','App\Http\Controllers\HomeController@completed')->name('completed');
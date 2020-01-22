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

Auth::routes(); // ROUTING INI MENCAKUP SEMUA ROUTING YANG BERKAITAN DENGAN AUTHENTICATION

Route::get('/home', 'HomeController@index')->name('home'); // ROUTING INI UNTUK MENG-HANDLE HALAMAN SETELAH LOGIN

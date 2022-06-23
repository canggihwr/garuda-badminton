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

Route::get('/', function () {
    return view('home/index');
});

Route::get('/login', function () {
    return view('login/sign-in');
});

Route::get('/daftar', function () {
    return view('login/sign-up');
});

Route::get('/cara-penyewaan', function () {
    return view('home/cara2');
});



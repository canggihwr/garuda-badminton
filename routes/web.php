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

Route::get('/dashboard', function () {
    return view('db/dashboard');
});

Route::get('/redirect', function () {
    return view('db/dashboard');
});

Route::get('/dashboard/perlengkapan', function () {
    return view('db/perlengkapan');
});

Route::get('/dashboard/perlengkapan/add', function () {
    return view('db/add_perlengkapan');
});

Route::get('/dashboard/user', function () {
    return view('db/user');
});

Route::get('/dashboard/user/add', function () {
    return view('db/add_user');
});

Route::get('/dashboard/admin', function () {
    return view('db/admin');
});

Route::get('/dashboard/admin/add', function () {
    return view('db/add_admin');
});

Route::get('/dashboard/lapangan', function () {
    return view('db/lapangan');
});

Route::get('/dashboard/paket', function () {
    return view('db/paket');
});



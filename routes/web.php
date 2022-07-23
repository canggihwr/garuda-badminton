<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/daftar', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/daftar', [RegisterController::class, 'store']);


Route::get('/cara-penyewaan', function () {
    return view('home/cara2');
});

Route::get('/dashboard', function() {
    return view('/dashboard/index');
})->middleware('auth');

Route::get('/redirect', function () {
    return view('db/dashboard');
});


Route::get('/dashboard/penyewaan', function () {
    return view('db/penyewaan');
});

Route::get('/dashboard/penyewaan/add', function () {
    return view('db/add_penyewaan');
});

Route::get('/dashboard/penyewaan/detail', function () {
    return view('db/detail_sewa');
});

Route::get('/dashboard/penyewaan/bayar', function () {
    return view('db/bayar');
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

Route::get('/dashboard/user/edit', function () {
    return view('db/edit_user');
});

Route::get('/dashboard/admin', function () {
    return view('db/admin');
});

Route::get('/dashboard/admin/add', function () {
    return view('db/add_admin');
});

Route::get('/dashboard/admin/edit', function () {
    return view('db/edit_admin');
});

Route::get('/dashboard/lapangan', function () {
    return view('db/lapangan');
});

Route::get('/dashboard/lapangan/edit', function () {
    return view('db/edit_lapangan');
});

Route::get('/dashboard/paket', function () {
    return view('db/paket');
});

Route::get('/dashboard/paket/add', function () {
    return view('db/add_paket');
});

Route::get('/dashboard/paket/edit', function () {
    return view('db/edit_paket');
});

Route::get('/dashboard/jadwal', function () {
    return view('db/jadwal');
});



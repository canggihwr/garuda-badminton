<?php

use App\Models\User;
use App\Models\Paket;
use App\Models\Lapangan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PenyewaanController;

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
    return view('/db/dashboard');
})->middleware('auth');

Route::get('/redirect', function () {
    return view('db/dashboard');
});


Route::get('/dashboard/penyewaan/', [PenyewaanController::class, 'list']);


Route::get('/dashboard/penyewaan/add', [PenyewaanController::class, 'show']);
Route::post('/dashboard/penyewaan/add', [PenyewaanController::class, 'store']);


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
    return view('db/user', [
        'user' => User::all()

    ]);
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
    return view('db/lapangan', [
        'lapangan' => Lapangan::all()
    ]);
});

Route::get('/dashboard/lapangan/add', function () {
    return view('db/add_lapangan');
});

Route::post('/dashboard/lapangan/add', [LapanganController::class, 'store']);

Route::get('/dashboard/lapangan/edit/{lapangan:id}', [LapanganController::class, 'edit']);

Route::get('/dashboard/lapangan/hapus/{lapangan:id}', [LapanganController::class, 'destroy']);

Route::post('/dashboard/lapangan/update/{lapangan:id}', [LapanganController::class, 'update']);


Route::get('/dashboard/paket', function () {
    return view('db/paket', [
        'paket' => Paket::all()

    ]);
});

Route::get('/dashboard/paket/edit/{paket:id}', [PaketController::class, 'edit']);

Route::get('/dashboard/paket/hapus/{paket:id}', [PaketController::class, 'destroy']);

Route::post('/dashboard/paket/update/{paket:id}', [PaketController::class, 'update']);



Route::post('/dashboard/paket/add', [PaketController::class, 'store']);


Route::get('/dashboard/paket/add', function () {
    return view('db/add_paket');
});

Route::get('/dashboard/jadwal', function () {
    return view('db/jadwal');
});



<?php

use App\Models\User;
use App\Models\Paket;
use App\Models\Lapangan;
use App\Models\Penyewaan;
use App\Models\Peralatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\PeralatanController;
use Illuminate\Support\Facades\Auth;


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
    return view('home/index', [
        'user' => User::all(),
        'peralatan' => Peralatan::all(),
        'lapangan' => Lapangan::all(),
        'penyewaan' => Penyewaan::all()
    ]);
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
    return view('/db/dashboard', [
        'l1' => Penyewaan::where('lapangan_id', 1)->count(),
        'l2' => Penyewaan::where('lapangan_id', 2)->count(),
        'l3' => Penyewaan::where('lapangan_id', 3)->count(),
        'h1' => Penyewaan::where('lapangan_id', 1)->get(),
        'h2' => Penyewaan::where('lapangan_id', 2)->get(),
        'h3' => Penyewaan::where('lapangan_id', 3)->get(),
        'saya' => Penyewaan::where('user_id', Auth::user()->id)->get(),
        'sayax' => Penyewaan::where('user_id', Auth::user()->id)->count(),
        'penyewaanx' => Penyewaan::all()->count(),
        'penyewaan' => Penyewaan::all(),
        'peralatan' => Peralatan::all(),
        'user' => User::all()->count()
    ]);
})->middleware('auth');

Route::get('/redirect', function () {
    return view('db/dashboard');
});


Route::get('/dashboard/penyewaan/', [PenyewaanController::class, 'list']);
Route::get('/dashboard/penyewaan/add', [PenyewaanController::class, 'show']);
Route::post('/dashboard/penyewaan/add', [PenyewaanController::class, 'store']);

Route::get('/dashboard/cetak/', [PenyewaanController::class, 'cetak']);



Route::get('/dashboard/penyewaan/detail', function () {
    return view('db/detail_sewa');
});

Route::get('/dashboard/penyewaan/bayar', function () {
    return view('db/bayar');
});


Route::get('/dashboard/penyewaan/batal/{penyewaan:id}', [PenyewaanController::class, 'destroy']);

Route::get('/dashboard/penyewaan/detail/{penyewaan:id}', [PenyewaanController::class, 'detail']);

Route::get('/dashboard/penyewaan/bayar/{penyewaan:id}', [PenyewaanController::class, 'bayar']);

Route::post('/dashboard/penyewaan/selesai/{penyewaan:id}', [PenyewaanController::class, 'selesai']);

Route::post('/dashboard/penyewaan/pembayaran/{penyewaan:id}', [PenyewaanController::class, 'pembayaran']);

Route::post('/dashboard/penyewaan/konfirmasi/{penyewaan:id}', [PenyewaanController::class, 'konfirmasi']);



Route::get('/dashboard/peralatan', function () {
    return view('db/peralatan', [
        'peralatan' => Peralatan::all()
    ]);
});

Route::get('/dashboard/peralatan/add', function () {
    return view('db/add_peralatan');
});

Route::post('/dashboard/peralatan/add', [PeralatanController::class, 'store']);

Route::get('/dashboard/peralatan/edit/{peralatan:id}', [PeralatanController::class, 'edit']);

Route::get('/dashboard/peralatan/hapus/{peralatan:id}', [PeralatanController::class, 'destroy']);

Route::post('/dashboard/peralatan/update/{peralatan:id}', [PeralatanController::class, 'update']);


Route::get('/dashboard/user', function () {
    return view('db/user', [
        'user' => User::all()

    ]);
});

Route::get('/dashboard/user/add', [UserController::class, 'view']);

Route::post('/dashboard/user/add', [UserController::class, 'store']);

Route::get('/dashboard/user/edit/{user:id}', [UserController::class, 'edit']);

Route::get('/dashboard/user/hapus/{user:id}', [UserController::class, 'destroy']);

Route::post('/dashboard/user/update/{user:id}', [UserController::class, 'update']);

Route::get('/dashboard/admin', function () {
    return view('db/admin', [
        'user' => User::where('tipe_akun', 'Admin')->get()

    ]);
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
    return view('db/jadwal', [
        'penyewaan' => Penyewaan::where('status', 'Dikonfirmasi')->get()
    ]);
});



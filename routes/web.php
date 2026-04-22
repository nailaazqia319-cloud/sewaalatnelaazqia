<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Dashboard\DashboardController; // ✅ WAJIB ADA

/*
|--------------------------------------------------------------------------
| LANDING (PUBLIC)
|--------------------------------------------------------------------------
*/
Route::controller(LandingController::class)->group(function () {

    Route::get('/', 'home')->name('home');

    Route::get('/artikel/{id}', 'detailArtikel')->name('artikel.detail');

    Route::get('/kategori', 'daftarKategori')->name('kategori.list');
    Route::get('/kategori/{id}', 'kategori')->name('kategori.detail');

    Route::get('/tag/{tag}', 'tag')->name('tag');

    Route::get('/tentang', 'tentang')->name('tentang');
    Route::get('/kontak', 'kontak')->name('kontak');
    Route::get('/daftar-isi', 'daftarIsi')->name('daftar.isi');

    // PENYEWA
    Route::view('/loginpenyewa', 'auth.loginpenyewa')->name('login.penyewa');
    Route::view('/register-penyewa', 'auth.registerpenyewa')->name('register.penyewa');
});

/*
|--------------------------------------------------------------------------
| AUTH USER (ADMIN & PETUGAS)
|--------------------------------------------------------------------------
*/
Route::prefix('user')->group(function () {

    Route::get('/login', [UserAuthController::class, 'loginForm'])->name('login.user');

    Route::post('/login', [UserAuthController::class, 'login'])->name('login.user.post');

    Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout.user');
});

/*
|--------------------------------------------------------------------------
| DASHBOARD (SETELAH LOGIN)
|--------------------------------------------------------------------------
*/
Route::prefix('dashboard')->group(function () {

    Route::get('/admin', [DashboardController::class, 'admin'])
        ->name('dashboard.admin');

    Route::get('/petugas', [DashboardController::class, 'petugas'])
        ->name('dashboard.petugas');
});
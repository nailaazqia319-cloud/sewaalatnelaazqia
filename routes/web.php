<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CONTROLLERS
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Auth\PenyewaAuthController;
use App\Http\Controllers\Dashboard\DashboardController;

use App\Http\Controllers\Master\MerkController;
use App\Http\Controllers\Master\KondisiController;
use App\Http\Controllers\Master\AlatController;
use App\Http\Controllers\Master\UserController;

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
});

/*
|--------------------------------------------------------------------------
| LOGIN PENYEWA (PUBLIC AUTH)
|--------------------------------------------------------------------------
*/
Route::get('/loginpenyewa', [PenyewaAuthController::class, 'showLoginForm'])
    ->name('login.penyewa');

Route::post('/loginpenyewa', [PenyewaAuthController::class, 'login'])
    ->name('login.penyewa.post');
Route::get('/register-penyewa', function () {
    return view('auth.registerpenyewa');
})->name('register.penyewa');
// Contoh Route untuk Dashboard Penyewa
Route::get('/dashboard-penyewa', function () {
    return view('penyewa.dashboard'); // Pastikan file ini ada di resources/views/penyewa/dashboard.blade.php
})->name('dashboard.penyewa'); // NAMA INI HARUS SAMA DENGAN DI CONTROLLER
// Tambahkan route logout ini
Route::post('/logout-penyewa', [PenyewaAuthController::class, 'logout'])->name('logout.penyewa');
/*

|--------------------------------------------------------------------------
| AUTH USER (ADMIN & PETUGAS)
|--------------------------------------------------------------------------
*/
Route::prefix('user')->group(function () {

    Route::get('/login', [UserAuthController::class, 'loginForm'])
        ->name('login.user');

    Route::post('/login', [UserAuthController::class, 'login'])
        ->name('login.user.post');

    Route::get('/logout', [UserAuthController::class, 'logout'])
        ->name('logout.user');
});

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/
Route::prefix('dashboard')->group(function () {

    Route::get('/admin', [DashboardController::class, 'admin'])
        ->name('dashboard.admin');

    Route::get('/petugas', [DashboardController::class, 'petugas'])
        ->name('dashboard.petugas');
});

/*
|--------------------------------------------------------------------------
| MASTER MERK
|--------------------------------------------------------------------------
*/
Route::prefix('merk')->group(function () {
    Route::get('/', [MerkController::class, 'index'])->name('merk.index');
    Route::get('/create', [MerkController::class, 'create'])->name('merk.create');
    Route::post('/store', [MerkController::class, 'store'])->name('merk.store');
    Route::get('/edit/{id}', [MerkController::class, 'edit'])->name('merk.edit');
    Route::post('/update/{id}', [MerkController::class, 'update'])->name('merk.update');
    Route::get('/delete/{id}', [MerkController::class, 'delete'])->name('merk.delete');
});

/*
|--------------------------------------------------------------------------
| MASTER KONDISI
|--------------------------------------------------------------------------
*/
Route::prefix('kondisi')->group(function () {
    Route::get('/', [KondisiController::class, 'index'])->name('kondisi.index');
    Route::get('/create', [KondisiController::class, 'create'])->name('kondisi.create');
    Route::post('/store', [KondisiController::class, 'store'])->name('kondisi.store');
    Route::get('/edit/{id}', [KondisiController::class, 'edit'])->name('kondisi.edit');
    Route::post('/update/{id}', [KondisiController::class, 'update'])->name('kondisi.update');
    Route::get('/delete/{id}', [KondisiController::class, 'delete'])->name('kondisi.delete');
});

/*
|--------------------------------------------------------------------------
| MASTER ALAT
|--------------------------------------------------------------------------
*/
Route::prefix('alat')->group(function () {
    Route::get('/', [AlatController::class, 'index'])->name('alat.index');
    Route::get('/create', [AlatController::class, 'create'])->name('alat.create');
    Route::post('/store', [AlatController::class, 'store'])->name('alat.store');
    Route::get('/delete/{id}', [AlatController::class, 'delete'])->name('alat.delete');
});

/*
|--------------------------------------------------------------------------
| MASTER USER (ADMIN ONLY)
|--------------------------------------------------------------------------
*/
Route::prefix('user')->group(function () {

    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
});
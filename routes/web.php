<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\StokBarangController;
use App\Http\Middleware\IsLogin;
use Illuminate\Support\Facades\Route;

// auth login
Route::get('/login', [AuthController::class, 'loginView']);
Route::post('/login', [AuthController::class, 'login']);

// auth logout
Route::post('/logout', [AuthController::class, 'logout']);

// beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');

Route::middleware(IsLogin::class)->group(function() {    
    // barang masuk
    Route::get('/barang-masuk', [BarangMasukController::class, 'index']);
    Route::get('/barang-masuk/create', [BarangMasukController::class, 'create']);
    Route::get('/barang-masuk/edit/{id}', [BarangMasukController::class, 'edit']);
    Route::post('/barang-masuk/store', [BarangMasukController::class, 'store']);
    Route::put('/barang-masuk/{id}', [BarangMasukController::class, 'update']);
    Route::delete('/barang-masuk/{id}', [BarangMasukController::class, 'destroy']);
    
    // barang keluar
    Route::get('/barang-keluar', [BarangKeluarController::class, 'index']);
    Route::get('/barang-keluar/create', [BarangKeluarController::class, 'create']);
    Route::get('/barang-keluar/edit/{id}', [BarangKeluarController::class, 'edit']);
    Route::post('/barang-keluar/store', [BarangKeluarController::class, 'store']);
    Route::put('/barang-keluar/{id}', [BarangKeluarController::class, 'update']);
    Route::delete('/barang-keluar/{id}', [BarangKeluarController::class, 'destroy']);
    
    // stok barang
    Route::get('/stok-barang', [StokBarangController::class, 'index']);
    Route::delete('/stok-barang/{id}', [BarangKeluarController::class, 'destroy']);
});

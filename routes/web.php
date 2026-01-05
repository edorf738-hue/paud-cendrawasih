<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AdminAuthController;
use App\models\pendaftaran;
use App\Http\Controllers\AdminDashboardController;


Route::get('/', fn () => view('index'))->name('home');

Route::get('/daftar', fn () => view('daftar'))->name('daftar.form');
Route::post('/daftar', [PendaftaranController::class, 'daftar'])->name('daftar');

Route::get('/login', fn () => view('admin.login'))->name('login');
Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');


Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])
    ->name('admin.dashboard');

// aksi verifikasi & hapus
Route::post('/admin/pendaftaran/{id}/verifikasi', [AdminDashboardController::class, 'verifikasi'])
    ->name('admin.pendaftaran.verifikasi');

Route::post('/admin/pendaftaran/{id}/hapus', [AdminDashboardController::class, 'hapus'])
    ->name('admin.pendaftaran.hapus');


Route::get('/pelajari', fn () => view('pelajari'))->name('pelajari');
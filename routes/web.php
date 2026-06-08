<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\BantuanController;
use App\Http\Controllers\Admin\MasyarakatController;
use App\Http\Controllers\Admin\VerifikasiController;
use App\Http\Controllers\Admin\EventBantuanController;
use App\Http\Controllers\Admin\PenyaluranController as AdminPenyaluranController;
use App\Http\Controllers\Admin\LaporanController;

use App\Http\Controllers\Petugas\DashboardController as PetugasDashboardController;
use App\Http\Controllers\Petugas\PengambilanController;
use App\Http\Controllers\Petugas\PenyaluranController;
use App\Http\Controllers\Petugas\EventController;

use App\Http\Controllers\Masyarakat\DashboardController as MasyarakatDashboardController;

/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.process');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // DASHBOARD
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
        ->name('dashboard');

    // BANTUAN
    Route::get('/bantuan', [BantuanController::class, 'index'])
        ->name('bantuan.index');

    // EVENT BANTUAN
    Route::get('/event-bantuan', [EventBantuanController::class, 'index'])
        ->name('event-bantuan.index');

    // MASYARAKAT
    Route::get('/masyarakat', [MasyarakatController::class, 'index'])
        ->name('masyarakat.index');

    // VERIFIKASI (WAJIB CONTROLLER)
    Route::get('/verifikasi', [VerifikasiController::class, 'index'])
        ->name('verifikasi.index');

    // PENYALURAN (WAJIB CONTROLLER)
    Route::get('/penyaluran', [PenyaluranController::class, 'index'])
        ->name('penyaluran.index');

    // LAPORAN (WAJIB CONTROLLER)
     Route::get('/admin/laporan', [LaporanController::class, 'index'])
        ->name('admin.laporan.index');
});

/*
|--------------------------------------------------------------------------
| PETUGAS
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->prefix('petugas')
    ->name('petugas.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [PetugasDashboardController::class, 'index'])
            ->name('dashboard');

        // Pengambilan
        Route::resource('pengambilan', PengambilanController::class);

        // Penyaluran
        Route::resource('penyaluran', PenyaluranController::class);

        // Event
        Route::get('/event', [EventController::class, 'index'])
            ->name('event.index');
    });
/*
|--------------------------------------------------------------------------
| MASYARAKAT
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('masyarakat')->name('masyarakat.')->group(function () {

    Route::get('/dashboard', [MasyarakatDashboardController::class, 'index'])
        ->name('dashboard');
});
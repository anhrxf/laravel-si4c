<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Fakultas.create');
});

Route::resource('/fakultas', FakultasController::class)->parameters([
    'fakultas' => 'fakultas'
]);
Route::resource('/prodi', ProdiController::class);
Route::resource('/periode', PeriodeController::class);
Route::resource('/berita', BeritaController::class);
Route::resource('/mahasiswa', MahasiswaController::class);
Route::get('/dashboard', [DashboardController::class, 'index']);
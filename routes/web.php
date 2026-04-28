<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
use App\Http\Controllers\BeritaController;
=======
>>>>>>> 33133f2c542f77516015eb4c5d6929697dcbd22d
>>>>>>> Stashed changes
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< Updated upstream
Route::resource('/fakultas', FakultasController::class);

Route::resource('/periode', PeriodeController::class);
=======
<<<<<<< HEAD
Route::resource('fakultas', FakultasController::class);
Route::resource('periode', PeriodeController::class);
Route::resource('berita', BeritaController::class);
=======
Route::resource('/fakultas', FakultasController::class);

Route::resource('/periode', PeriodeController::class);
>>>>>>> 33133f2c542f77516015eb4c5d6929697dcbd22d
>>>>>>> Stashed changes

<?php

use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
// Route Jurusan
    Route::get('/jurusan', [JurusanController::class, 'getDataJurusan']);
    Route::get('/jurusan/{id_jurusan}', [JurusanController::class, 'show']);
// Route Mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'getDataMahasiswa']);
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);
    Route::get('/logout', [AuthenticationController::class, 'logout']);
    Route::get('/me', [AuthenticationController::class, 'show']);
});

Route::post('/login', [AuthenticationController::class, 'login']);



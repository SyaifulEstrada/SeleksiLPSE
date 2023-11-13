<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JurusanApiController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Api\MahasiswaApiController;

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
    Route::get('/jurusan/{id_jurusan}', [JurusanApiController::class, 'Show']);
    Route::post('/jurusan/store', [JurusanApiController::class, 'store']);
    Route::patch('/jurusan/update/{id_jurusan}', [JurusanApiController::class, 'update']);
    Route::delete('/jurusan/delete/{id_jurusan}', [JurusanApiController::class, 'destroy']);


    // Route Mahasiswa
    Route::get('/mahasiswa/{nim}', [MahasiswaApiController::class, 'show']);

    // Route Login and logout
    Route::get('/logout', [AuthenticationController::class, 'logout']);
    Route::get('/me', [AuthenticationController::class, 'show']);
});

Route::get('/jurusan', [JurusanApiController::class, 'getDataJurusan']);
Route::get('/mahasiswa', [MahasiswaApiController::class, 'getDataMahasiswa']);
Route::post('/login', [AuthenticationController::class, 'login']);

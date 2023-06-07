<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guruController;
use App\Http\Controllers\hariController;
use App\Http\Controllers\userController;
use App\Http\Controllers\waliController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\jurusanController;
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
    return view('welcome');
});
Route::get('/main', function () {
    return view('admin');
});
Route::get('/gurudasboard', function () {
    return view('guru');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('siswa', [siswaController::class, 'data']);

Route::get('guru', [guruController::class, 'data']);

Route::get('mapel', [mapelController::class, 'data']);

Route::get('kelas', [kelasController::class, 'data']);

Route::get('jurusan', [jurusanController::class, 'data']);

Route::get('jadwal', [jadwalController::class, 'data']);

Route::get('hari', [hariController::class, 'data']);

Route::get('wali', [waliController::class, 'data']);

Route::get('user', [userController::class, 'data']);

Route::post('siswa', [siswaController::class, 'addProses']);

//Route::get('siswa', [siswaController::class, 'data']);

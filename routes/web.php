<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DetailPasokController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\PasokController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('login/kasir', [KasirController::class, 'loginKasir']);
Route::get('dashboard', [KasirController::class, 'dashboard']);
Route::post('logic', [KasirController::class, 'logika']);
Route::get('pasok', [PasokController::class, 'pasok']);
Route::get('dbuku', [BukuController::class, 'dbuku']);
Route::get('tpenjualan', [DetailPenjualanController::class, 'tpenjualan']);
Route::get('laporan', [DetailPenjualanController::class, 'laporan']);
Route::get('beranda', [DetailPenjualanController::class, 'beranda']);
Route::get('pasokk', [PasokController::class, 'validasi_pasok']);
Route::get('bukuu', [BukuController::class, 'validasi_buku']);
Route::get('laporann', [PenjualanController::class, 'validasi_laporan']);
Route::post('entry', [PenjualanController::class, 'Entry']);
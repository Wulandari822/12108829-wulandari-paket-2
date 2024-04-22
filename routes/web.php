<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;



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

Route::get('/',[AuthController::class, 'login'])->name('login');
Route::post('/',[AuthController::class, 'loginStore'])->name('login-store');
Route::get('/admin-dashboard',[AuthController::class, 'admin'])->name('admin-dashboard');
Route::get('/petugas-dashboard',[AuthController::class, 'petugas'])->name('petugas-dashboard');


Route::get('/produk',[ProdukController::class, 'produk'])->name('produk');
Route::get('/produk-create',[ProdukController::class, 'produkCreate'])->name('produk-create');
Route::get('/produk-edit',[ProdukController::class, 'produkEdit'])->name('produk-edit');
Route::get('/produk-stok',[ProdukController::class, 'produkStok'])->name('produk-stok');

Route::get('/user',[AuthController::class, 'user'])->name('user');
Route::get('/user-create',[AuthController::class, 'userCreate'])->name('user-create');
Route::get('/user-edit',[AuthController::class, 'userEdit'])->name('user-edit');

Route::get('/penjualan',[PenjualanController::class, 'penjualan'])->name('penjualan');
Route::get('/penjualan-create',[PenjualanController::class, 'penjualanCreate'])->name('penjualan-create');
Route::get('/penjualan-show',[PenjualanController::class, 'penjualanShow'])->name('penjualan-show');








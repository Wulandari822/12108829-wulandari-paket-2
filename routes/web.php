<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PetugasController;
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

Route::get('/', [AuthController::class, 'log'])->name('/');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'role:admin'], function () {
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/user', [AdminController::class, 'user'])->name('user');
    Route::get('/user/create', [AdminController::class, 'userCreate'])->name('user-create');
    Route::post('/user/create', [AdminController::class, 'Userstore'])->name('user-store');
    Route::get('/user/edit/{id}', [AdminController::class, 'userEdit'])->name('user-edit');
    Route::post('/user/update/{id}', [AdminController::class, 'userUpdate'])->name('user-update');
    Route::get('/user/delete/{id}', [AdminController::class, 'userDelete'])->name('user-delete');
});
    Route::get('/produk-admin', [ProdukController::class, 'produk'])->name('produk-admin');
    Route::get('/produk/create', [ProdukController::class, 'produkCreate'])->name('produk-create');
    Route::post('/produk/create', [ProdukController::class, 'produkStore'])->name('produk-store');
    Route::get('/produk-edit/{id}', [ProdukController::class, 'produkEdit'])->name('produk-edit');
    Route::post('/produk-edit/{id}', [ProdukController::class,'produkUpdate'])->name('produk-update');
    Route::get('/produk/restok/{id}', [ProdukController::class, 'restokCreate'])->name('stok-create');
    Route::post('/produk/restok/{id}', [ProdukController::class, 'restokUpdate'])->name('stok-update');
    Route::get('/produk-delete/{id}', [ProdukController::class, 'delete'])->name('produk-delete');

    Route::get('/penjualan', [PenjualanController::class, 'penjualan'])->name('penjualan');
    Route::get('penjualan/tambah', [PenjualanController::class, 'tambahpenjualan'])->name('penjualan.tambah');
    Route::post('penjualan/tambah', [PenjualanController::class, 'simpanPenjualan'])->name('penjualan.tambah.simpan');
    Route::get('penjualan/detail/{id}', [PenjualanController::class, 'detailPenjualan'])->name('penjualan.detail');
    Route::delete('/penjualan-delete/{id}', [PenjualanController::class, 'deleteDetailPenjualan'])->name('detail-penjualan-delete');

    Route::get('/penjualan/export/excel', [PenjualanController::class, 'exportToExcel'])->name('penjualan.export.excel');
// Route::get('produk/update/{id}', [AdminController::class,'produkStokEdit'])->name('produk.edit');
// Route::put('produk/update/{id}', [AdminController::class,'produkStokUpdate']);


Route::get('/search', [AdminController::class, 'search'])->name('search-user');
Route::get('/search', [ProdukController::class, 'search'])->name('search-produk');





Route::group(['middleware' => 'role:petugas'], function () {
    Route::get('/petugas-dashboard', [PetugasController::class, 'index'])->name('petugas-dashboard');
    Route::get('/produk-petugas', [PetugasController::class, 'produk'])->name('produk-petugas');

    Route::get('/penjualan-petugas', [PetugasController::class, 'penjualan'])->name('penjualan-petugas');
    Route::get('penjualan/detail/{id}', [PenjualanController::class, 'detailPenjualan'])->name('penjualan.detail');

});

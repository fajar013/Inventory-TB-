<?php

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SupplaierController;

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

// LOGIN
Route::get('/', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


//DASHBOARD
Route::get('/dashboard', [dashboardController::class, 'index']);


//REGISTRATION
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


//BARANG
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/createb', [BarangController::class, 'create']);
Route::get('/editb/{id}', [BarangController::class, 'editb']);
Route::put('/barang/update/{id}', 'BarangController@update');
Route::get('/hapus/{id}', [BarangController::class, 'destroy']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::get('/detailc/{id}', [CategoryController::class, 'barang']);


//CATEGORY
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/detailc/{id}', [CategoryController::class, 'barang']);
Route::get('/ccreate', [CategoryController::class, 'ccreate']);
Route::get('/editc/{id}', [CategoryController::class, 'editc']);
Route::put('/category/update/{id}', 'CategoryController@update');
Route::get('/hapus/{id}', [CategoryController::class, 'destroy']);
Route::post('/category/store', [CategoryController::class, 'store']);


// PELANGGAN
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/pcreate', [PelangganController::class, 'create']);
Route::post('/pelanggan/store', [PelangganController::class, 'store']);
Route::get('/create', [PelangganController::class, 'create']);
Route::get('/editp/{id}', [PelangganController::class, 'editp']);
Route::put('/pelanggan/update/{id}', 'PelangganController@update');
Route::get('/phapus/{id}', [PelangganController::class, 'pdestroy']);

// SUPPLAIER
Route::get('/supplaier', [SupplaierController::class, 'index']);
Route::post('/supplaier/store', [SupplaierController::class, 'store']);
Route::get('/screate', [SupplaierController::class, 'screate']);
Route::get('/edits/{id}', [SupplaierController::class, 'edits']);
Route::put('/supplaier/update/{id}', 'SupplaierController@update');
Route::get('/hapus/{id}', [SupplaierController::class, 'destroy']);



// MASUK
Route::get('/masuk', [MasukController::class, 'index']);
Route::get('/mcreate', [MasukController::class, 'create']);
Route::post('/masuk/store', [MasukController::class, 'store']);
Route::get('/editm/{id}', [MasukController::class, 'editm']);
Route::put('/masuk/update/{id}', 'MasukController@update');
Route::get('/hapus/{id}', [MasukController::class, 'destroy']);
Route::get('/detailm/{id}', [CategoryController::class, 'barang']);


// KELUAR
Route::get('/keluar', [KeluarController::class, 'index']);
Route::get('/kcreate', [KeluarController::class, 'create']);
Route::post('keluar/store', [KeluarController::class, 'store']);
Route::get('/editk/{id}', [KeluarController::class, 'editk']);
Route::put('keluar/update/{id}', 'KeluarController@update');
Route::get('/hapusk/{id}', [KeluarController::class, 'destroy']);
Route::get('/detailk/{id}', [KeluarController::class, 'barang']);
Route::get('/printbk', [KeluarController::class, 'printbk']);

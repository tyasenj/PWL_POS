<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\PenjualanController;
use App\Models\User;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

/* ----------------------------------
             JOBSHEET 5
------------------------------------*/
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']); //JOBSHEET 6
Route::post('/kategori', [KategoriController::class, 'store']); //JOBSHEET 6 
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('/kategori/{id}', [KategoriController::class, 'store2']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);
/* ----------------------------------
             JOBSHEET 6
------------------------------------*/
Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/tambah', [LevelController::class, 'tambah']);
Route::get('/level/tambah_simpan', [LevelController::class, 'tambah_simpan'])->name('level.tambah_simpan');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');
Route::post('/level/tambah_simpan', [LevelController::class, 'tambah_simpan'])->name('level.tambah_simpan');
Route::resource('m_user', POSController::class);
/* ----------------------------------
             JOBSHEET 7
------------------------------------*/
Route::get('/', [welcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);          //Menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);      //Menampilkan data user dalam bentuk join untuk datatables
    Route::get('/create', [UserController::class, 'create']);   //Menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         //Menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);       //Menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  //Menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     //Menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); //Menghapus data user

});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);
    Route::post('/list', [LevelController::class, 'list']);

    Route::get('/create', [LevelController::class, 'create']);
    Route::post('/', [LevelController::class, 'store']);

    Route::get('/{id}', [LevelController::class, 'show']);
    Route::get('/{id}/edit', [LevelController::class, 'edit']);
    Route::put('/{id}', [LevelController::class, 'update']);


    Route::delete('/{id}', [LevelController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/list', [KategoriController::class, 'list']);

    Route::get('/create', [kategoriController::class, 'create']);
    Route::post('/', [KategoriController::class, 'store']);

    Route::get('/{id}', [KategoriController::class, 'show']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);


    Route::delete('/{id}', [KategoriController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']);
    Route::post('/list', [BarangController::class, 'list']);

    Route::get('/create', [BarangController::class, 'create']);
    Route::post('/', [BarangController::class, 'store']);

    Route::get('/{id}', [BarangController::class, 'show']);
    Route::get('/{id}/edit', [BarangController::class, 'edit']);
    Route::put('/{id}', [BarangController::class, 'update']);


    Route::delete('/{id}', [BarangController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'stok'], function () {
    Route::get('/', [StokController::class, 'index']);
    Route::post('/list', [StokController::class, 'list']);

    Route::get('/create', [StokController::class, 'create']);
    Route::post('/', [StokController::class, 'store']);

    Route::get('/{id}', [StokController::class, 'show']);
    Route::get('/{id}/edit', [StokController::class, 'edit']);
    Route::put('/{id}', [StokController::class, 'update']);


    Route::delete('/{id}', [StokController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'penjualan'], function () {
    Route::get('/', [PenjualanController::class, 'index']);
    Route::post('/list', [PenjualanController::class, 'list']);

    Route::get('/create', [PenjualanController::class, 'create']);
    Route::post('/', [PenjualanController::class, 'store']);

    Route::get('/{id}', [PenjualanController::class, 'show']);
    Route::get('/{id}/edit', [PenjualanController::class, 'edit']);
    Route::put('/{id}', [PenjualanController::class, 'update']);


    Route::delete('/{id}', [PenjualanController::class, 'destroy'])->name('destroy');
});

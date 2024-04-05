<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

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

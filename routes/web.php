<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SembakoController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MyKaryawanController;
use App\Http\Controllers\BelajarController;

//import java.io.*;

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

// kalau di Java
// System.out.println();
// Route.get();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Coba::class, 'helloworld']);
//Route::get('hello', 'App\Http\Controllers\Coba@helloworld');

//pertama
Route::get('pertama', function () {
	return view('pertama');
});

//tugas 1
Route::get('tugas1', function () {
    return view('tugas1');
});

//bootstrap1
Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

//bootstrap2
Route::get('bootstrap2', function () {
    return view('bootstrap2');
});

//js1
Route::get('js1', function () {
    return view('js1');
});

//js2
Route::get('js2', function () {
    return view('js2');
});

//linktree
Route::get('linktree', function () {
    return view('linktree');
});

//ets
Route::get('ets', function () {
    return view('ets');
});

//danantara
Route::get('danantara', function () {
    return view('danantara');
});

//frontend
Route::get('frontend', function () {
    return view('frontend');
});

Route::get('dosen', [Coba::class, 'index']);

// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); // action form

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// route pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);

Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);

Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);

Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

// route pegawai ke frontend
Route::get('/pegawai/frontend', [PegawaiDBController::class, 'frontend']);

// route sembako TUGAS CURD
Route::get('/sembako', [SembakoController::class, 'index']);
Route::get('/sembako/tambah', [SembakoController::class, 'tambah']);
Route::post('/sembako/store', [SembakoController::class, 'store']);
Route::get('/sembako/edit/{id}', [SembakoController::class, 'edit']);
Route::post('/sembako/update/{id}', [SembakoController::class, 'update']);
Route::get('/sembako/hapus/{id}', [SembakoController::class, 'hapus']);
Route::get('/sembako/cari', [SembakoController::class, 'cari']);

// route sembako ke frontend
Route::get('/pegawai/sembako', [PegawaiDBController::class, 'tugascurd']);


//LATIHAN 1
// route keranjang belanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/beli', [KeranjangBelanjaController::class, 'beli']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::post('/keranjangbelanja/update/{ID}', [KeranjangBelanjaController::class, 'update']);
Route::get('/keranjangbelanja/batal/{ID}', [KeranjangBelanjaController::class, 'batal']);
Route::get('/keranjangbelanja/cari', [KeranjangBelanjaController::class, 'cari']);


//LATIHAN 2
//route latihan 2
Route::get('/pagecounter', [PageCounterController::class, 'show']);

//LATIHAN 3
//route latihan 3
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::get('/karyawan/edit/{kp}', [KaryawanController::class, 'edit']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::post('/karyawan/update', [KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{kp}', [KaryawanController::class, 'hapus']);

//Route EAS
Route::get('/eas', [MyKaryawanController::class, 'index']);
Route::get('/mykaryawan', [MyKaryawanController::class, 'index']);
Route::get('/mykaryawan/edit/{kp}', [MyKaryawanController::class, 'edit']);
Route::post('/mykaryawan/update', [MyKaryawanController::class, 'update']);
Route::get('/mykaryawan/view/{kp}', [MyKaryawanController::class, 'view']);

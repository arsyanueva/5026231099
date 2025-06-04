<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

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

Route::get('/pegawai', [PegawaiDBController::class, 'index']);

Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);

Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);

Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

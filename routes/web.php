<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
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
Route::get('index', function () {
    return view('index');
});

//danantara
Route::get('danantara', function () {
    return view('danantara');
});

//frontend
Route::get('frontend', function () {
    return view('frontend');
});

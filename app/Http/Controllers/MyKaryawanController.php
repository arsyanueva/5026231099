<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{
    public function index()
    {
        // mengambil data dari table karyawan
        $mykaryawan = DB::table('mykaryawan')->get();

        // mengirim data karyawan ke view index
        return view('indexmykaryawan', ['mykaryawan' => $mykaryawan]);
    }

    // method untuk edit data karyawan
    public function edit($kp)
    {
        // mengambil data karyawan berdasarkan kodepegawai yang dipilih
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kp)->get();
        // passing data karyawan yang didapat ke view editkaryawan.blade.php
        return view('editmykaryawan', ['mykaryawan' => $mykaryawan]);
    }

    // update data karyawan
    public function update(Request $request)
    {
        // update data karyawan
        DB::table('mykaryawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/mykaryawan');
    }

    public function view($kodepegawai)
    {
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('viewmykaryawan', ['mykaryawan' => $mykaryawan]);
    }

}

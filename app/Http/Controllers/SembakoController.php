<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SembakoController extends Controller
{
    public function index()
    {
        // mengambil data dari table sembako
        $sembako = DB::table('sembako')->paginate(10); // untuk paginasi

        // mengirim data sembako ke view index
        return view('indexsembako', ['sembako' => $sembako]);
    }

    // method untuk menampilkan view form tambah sembako
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahsembako');
    }

    // method untuk insert data ke table sembako
    public function store(Request $request)
    {
        // insert data ke table sembako
        DB::table('sembako')->insert([
            'id' => $request->id,
            'merksembako' => $request->merksembako,
            'hargasembako' => $request->hargasembako,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat,
        ]);
        // alihkan halaman ke halaman sembako
        return redirect('/sembako');
    }

    // method untuk edit data sembako
    public function edit($id)
    {
        // mengambil data sembako berdasarkan id yang dipilih
        $sembako = DB::table('sembako')->where('id', $id)->get();

        // mengirim data sembako ke view edit
        return view('editsembako', ['sembako' => $sembako]);
    }

    // method untuk update data sembako
    public function update(Request $request, $id)
    {
        // update data ke table sembako
        DB::table('sembako')->where('id',$request->id)->update([
            'merksembako' => $request->merksembako,
            'hargasembako' => $request->hargasembako,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat,
        ]);
        // alihkan halaman ke halaman sembako
        return redirect('/sembako');
    }

    // method untuk menghapus data sembako
    public function hapus($id)
    {
        // menghapus data sembako berdasarkan id
        DB::table('sembako')->where('id', $id)->delete();

        // alihkan halaman ke halaman sembako
        return redirect('/sembako');
    }
    public function cari(Request $request) // ini request, bukan 1 value
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sembako = DB::table('sembako')
		->where('merksembako','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexsembako',['sembako' => $sembako]);

	}

}

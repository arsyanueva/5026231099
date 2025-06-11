<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        // mengambil data dari table sembako
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10); // untuk paginasi

        // mengirim data sembako ke view index
        return view('indexkeranjangbelanja', ['keranjangbelanja' => $keranjangbelanja]);
    }

    public function beli()
    {
        // memanggil view tambah
        return view('tambahkeranjangbelanja');
    }
    public function store(Request $request)
    {
        // insert data ke table
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);
        // alihkan halaman ke halaman
        return redirect('/keranjangbelanja');
    }
        public function update(Request $request, $ID)
    {
        // update data ke table sembako
        DB::table('keranjangbelanja')->where('ID',$request->ID)->update([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);
        // alihkan halaman ke halaman sembako
        return redirect('/keranjangbelanja');
    }
    public function batal($ID)
    {
        // menghapus data sembako berdasarkan id
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        // alihkan halaman ke halaman sembako
        return redirect('/keranjangbelanja');
    }
    public function cari(Request $request) // ini request, bukan 1 value
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$keranjangbelanja = DB::table('keranjangbelanja')
		->where('KodeBarang','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexkeranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);

	}

}

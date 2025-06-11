@extends('template3')

@section('title', 'Tambah Keranjang Belanja')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Beli</h4>
                </div>
                <div class="card-body">
                    <a href="/keranjangbelanja" class="btn btn-secondary mb-3">Kembali</a>
                    <form action="/keranjangbelanja/store" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="KodeBarang">Kode Barang</label>
                            <input class="form-control" type="text" id="KodeBarang" placeholder="Masukkan Kode Barang" name="KodeBarang" required>
                        </div>
                        <div class="form-group">
                            <label for="Jumlah">Jumlah Pembelian</label>
                            <input class="form-control" type="text" id="Jumlah" placeholder="Masukkan Jumlah Pembelian" name="Jumlah" required>
                        <div class="form-group">
                            <label for="Harga">Harga per item</label>
                            <input class="form-control" type="text" id="Harga" placeholder="Masukkan Harga" name="Harga" required>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

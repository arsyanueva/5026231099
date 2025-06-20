@extends('template')

@section('content')
    <h1 class="justify-content-center" style="color:rgb(65, 97, 82)">Latihan EAS</h1>
    <h3 class="mt-6 mb-3">Data Keranjang Belanja</h3>

    <a href="/keranjangbelanja/beli" class="btn btn-primary mb-3">Beli</a>

    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keranjangbelanja as $kb)
            <tr>
                <td>{{ $kb->ID }}</td>
                <td>{{ $kb->KodeBarang }}</td>
                <td>{{ $kb->Jumlah}}</td>
                <td>Rp {{ number_format($kb->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($kb->Jumlah * $kb->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/batal/{{ $kb->ID }}" class="btn btn-danger btn-sm" onclick="return confirm('Batalkan pembelian ini?')">Batal</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

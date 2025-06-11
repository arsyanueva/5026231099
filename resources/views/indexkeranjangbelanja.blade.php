@extends('template3')

@section('content')
    <h1 class="justify-content-center" style="color:rgb(65, 97, 82)">Latihan EAS</h1>
    <h3 class="mt-6 mb-3">Data Keranjang Belanja</h3>

    <form action="/keranjangbelanja/cari" method="GET" class="form-inline mb-3">
        <input type="text" class="form-control mr-2" name="cari" placeholder="Cari Barang ..">
        <button type="submit" class="btn btn-info">CARI</button>
    </form>

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
                    <a href="/keranjangbelanja/beli/{{ $kb->ID }}" class="btn btn-success btn-sm">Beli</a>
                    <a href="/keranjangbelanja/batal/{{ $kb->ID }}" class="btn btn-danger btn-sm" onclick="return confirm('Batalkan pembelian ini?')">Batal</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $keranjangbelanja->links() }}
@endsection

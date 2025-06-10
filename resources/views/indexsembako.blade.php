@extends('template3')

@section('content')
    <h1 class="justify-content-center" style="color:rgb(65, 97, 82)">Tugas CURD</h1>
    <h3 class="mt-6 mb-3">Data Sembako</h3>

    <a href="/sembako/tambah" class="btn btn-primary mb-3">+ Tambah Sembako Baru</a>

    <form action="/sembako/cari" method="GET" class="form-inline mb-3">
        <input type="text" class="form-control mr-2" name="cari" placeholder="Cari Sembako ..">
        <button type="submit" class="btn btn-info">CARI</button>
    </form>

    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Merk</th>
                <th>Harga</th>
                <th>Tersedia</th>
                <th>Berat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sembako as $s)
            <tr>
                <td>{{ $s->merksembako }}</td>
                <td>{{ $s->hargasembako }}</td>
                <td>{{ $s->tersedia ? 'Ya' : 'Tidak' }}</td>
                <td>{{ $s->berat }}</td>
                <td>
                    <a href="/sembako/edit/{{ $s->id }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/sembako/hapus/{{ $s->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $sembako->links() }}
@endsection

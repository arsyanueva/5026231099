@extends('template')

@section('content')
    <h3>Data Karyawan</h3>


    <table class="table table-striped">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach($mykaryawan as $k)
        <tr>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ ucwords(strtolower($k->namalengkap)) }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ strtoupper($k->departemen) }}</td>
            <td>
                <a href="/mykaryawan/edit/{{ $k->kodepegawai }}" class="btn btn-success">Edit</a>
                <a href="/mykaryawan/view/{{ $k->kodepegawai }}" class="btn btn-danger">View</a>
            </td>
        </tr>
        @endforeach
    </table>

@endsection

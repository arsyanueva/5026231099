@extends('template')

@section('content')
<div class="container mt-4">
    <h3>Detail Karyawan</h3>
    <div class="mb-2"><strong>Kode Pegawai:</strong> {{ $mykaryawan->kodepegawai }}</div>
    <div class="mb-2"><strong>Nama Lengkap:</strong> {{ $mykaryawan->namalengkap }}</div>
    <div class="mb-2"><strong>Divisi:</strong> {{ $mykaryawan->divisi }}</div>
    <div class="mb-2"><strong>Departemen:</strong> {{ $mykaryawan->departemen }}</div>
    <a href="/mykaryawan" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection

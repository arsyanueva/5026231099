@extends('template3')

@section('title', 'Tambah Sembako')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Tambah Sembako</h4>
                </div>
                <div class="card-body">
                    <a href="/sembako" class="btn btn-secondary mb-3">Kembali</a>
                    <form action="/sembako/store" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="merksembako">Merk</label>
                            <input class="form-control" type="text" id="merksembako" placeholder="Masukkan Merk Sembako" name="merksembako" required>
                        </div>
                        <div class="form-group">
                            <label for="hargasembako">Harga</label>
                            <input class="form-control" type="number" id="hargasembako" placeholder="Masukkan Harga Sembako" name="hargasembako" required>
                        </div>
                        <div class="form-group">
                            <label>Tersedia</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia1" value="1" required>
                                    <label class="form-check-label" for="tersedia1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia0" value="0">
                                    <label class="form-check-label" for="tersedia0">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat</label>
                            <input class="form-control" type="number" step="0.01" id="berat" placeholder="Masukkan Berat" name="berat" required>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

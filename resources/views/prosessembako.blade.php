@extends('template')

@section('title', 'Proses Sembako')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3>Data Sembako yang Diinput:</h3>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td style="width:150px">Merk</td>
                            <td>{{ $data->merksembako }}</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>{{ $data->hargasembako }}</td>
                        </tr>
                        <tr>
                            <td>Tersedia</td>
                            <td>{{ $data->tersedia ? 'Ya' : 'Tidak' }}</td>
                        </tr>
                        <tr>
                            <td>Berat</td>
                            <td>{{ $data->berat }}</td>
                        </tr>
                    </table>
                    <a href="/sembako/tambah" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

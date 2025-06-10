@extends('template3')

@section('title', 'Edit Sembako')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Edit Sembako</h4>
                </div>
                <div class="card-body">
                    <a href="/sembako" class="btn btn-secondary mb-3">Kembali</a>
                    @foreach($sembako as $s)
                    <form action="/sembako/update/{{ $s->id }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="merksembako">Merk</label>
                            <input type="text" class="form-control" id="merksembako" name="merksembako" value="{{ $s->merksembako }}" required>
                        </div>
                        <div class="form-group">
                            <label for="hargasembako">Harga</label>
                            <input type="number" class="form-control" id="hargasembako" name="hargasembako" value="{{ $s->hargasembako }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tersedia">Tersedia</label>
                            <select class="form-control" id="tersedia" name="tersedia" required>
                                <option value="1" {{ $s->tersedia ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$s->tersedia ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat (kg)</label>
                            <input type="number" step="0.01" class="form-control" id="berat" name="berat" value="{{ $s->berat }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan Data</button>

                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

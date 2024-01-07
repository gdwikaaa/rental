@extends('layout.master')

@section('title', 'Ubah sparepart')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/sparepart') }}">sparepart</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah sparepart</h4>
            </div>
        </div>
        <form action="{{ url('/rental/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">Kode Sparepart</label>
                    <input class="form-control" type="text" name="kdbarang" value="{{ $data->kdbarang }}">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" value="{{ $data->nama }}">
                </div>
                <div>
                    <label class="form-label">Harga</label>
                    <input class="form-control" type="text" name="harga" value="{{ $data->harga }}">
                </div>
                <div>
                    <label class="form-label">Merk</label>
                    <select class="form-select" name="merk">
                        @foreach ($merk as $m)
                            <option {{ $data->merk_id == $m->id ? 'selected' : '' }} value="{{ $m->id }}">{{ $m->nama }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection

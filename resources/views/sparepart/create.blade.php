@extends('layout.master')

@section('title', 'Tambah Sparepart')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/sparepart') }}">sparepart</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah sparepart</h4>
            </div>
        </div>
        <form action="{{ url('/sparepart') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">Kode Barang</label>
                    <input class="form-control" type="text" name="kdbarang">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label">Harga</label>
                    <input class="form-control" type="text" name="harga">
                </div>
                <div>
                    <label class="form-label">Merk</label>
                    <select class="form-select" name="merk">
                        @foreach ($merk as $m)
                            <option value="{{ $m->id }}">{{ $m->nama }}</option>
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
@extends('layout.master')

@section('title', 'Ubah ban')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/ban') }}">ban</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Ubah BAN</h4>
            </div>
        </div>
        <form action="{{ url('/ban/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">NIM</label>
                    <input class="form-control" type="text" name="kdban" value="{{ $banban->kdban }}">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" value="{{ $banban->nama }}">
                </div>
                <div>
                    <label class="form-label">Harga</label>
                    <input class="form-control" type="text" name="harga" value="{{ $banban->harga }}">
                </div>
                <div>
                    <label class="form-label">Jenis</label>
                    <select class="form-select" name="jenisban">
                        @foreach ($jenisban as $jb)
                            <option {{ $banban->jenisban_id == $jb->id ? 'selected' : '' }} value="{{ $jb->id }}">{{ $jb->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="form-label">Merk</label>
                    <select class="form-select" name="merkban">
                        @foreach ($merkban as $mb)
                            <option {{ $banban->merkban_id == $mb->id ? 'selected' : '' }} value="{{ $mb->id }}">{{ $mb->nama }}</option>
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
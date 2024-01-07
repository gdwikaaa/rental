@extends('layout.master')

@section('title', 'Ubah rental')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/rental') }}">Rental</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah RENTAL</h4>
            </div>
        </div>
        <form action="{{ url('/rental/' . $id) }}" method="POST">
            <div class="card-body">
            @csrf
            @method('PUT')
            <div>
                <label class="form-label @error('noktp') text-danger @enderror">No KTP</label>
                <input class="form-control @error('noktp') is-invalid @enderror" type="text" name="noktp" value="{{$data->noktp}}">
                @error('noktp')
                <div class="invalid-feedback mb-2">{{$message }}</div?>
                    @enderror
            </div>
            <div>
                <label class="form-label @error('nama') text-danger @enderror">Nama</label>
                <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{$data->nama}}">
                @error('nama')
                <div class="invalid-feedback mb-2">{{$message }}</div?>
                    @enderror
            </div>
            <div>
                <label class="form-label @error('motor') text-danger @enderror">PIlih Motor</label>
                    <select class="form-select @error('motor') is-invalid @enderror" name="motor">
                        @foreach ($motor as $jd)
                            <option value="{{ $jd->id }}" {{old('motor') == $jd->id ? 'selected' : '' }}>{{ $jd->nama }}</option>
                        @endforeach
                    @error('motor')
                        <div class="invalid-feedback mb-2">{{ $message }}</div>
                    @enderror
                    </select>
                </div>
                <div>
                    <label class="form-label @error('tanggalpinjam') text-danger @enderror">Tanggal Pinjam</label>
                    <input class="form-control @error('tanggalpinjam') is-invalid @enderror" type="date" name="tanggalpinjam" value="{{$data->tanggalpinjam}}">
                    @error('tanggalpinjam')
                    <div class="invalid-feedback mb-2">{{$message }}</div?>
                        @enderror
                    </select>
                </div>
                <div>
                    <label class="form-label @error('tanggalselesai') text-danger @enderror">Tanggal Selesai</label>
                    <input class="form-control @error('tanggalselesai') is-invalid @enderror" type="date" name="tanggalselesai" value="{{$data->tanggalselesai}}">
                    @error('tanggalselesai')
                    <div class="invalid-feedback mb-2">{{$message }}</div?>
                        @enderror
                    </select>
                </div>
                <div>
                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection

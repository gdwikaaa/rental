
@extends('layout.master')

@section('title', 'Tambah Rental')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/rental') }}">Rental</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah motor</h4>
            </div>
        </div>
        <form action="{{ url('/rental') }}" method="POST" enctype="multipart/form-data"> 
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label @error('noktp') text-danger @enderror">No KTP</label>
                    <input class="form-control @error('noktp') is-invalid @enderror" type="text" name="noktp" value="{{old('noktp')}}">
                    @error('noktp')
                    <div class="invalid-feedback mb-2">nopol wajin diisi</div?>
                        @enderror
                </div>
                <div>
                    <label class="form-label @error('nama') text-danger @enderror">Nama</label>
                    <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback mb-2">nama wajib diisi</div?>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label @error('motor') text-danger @enderror">PIlih Motor</label>
                    <select class="form-select @error('motor') is-invalid @enderror" name="motor">
                        @foreach ($motor as $jd)
                            <option value="{{ $jd->id }}" {{old('motor') == $jd->id ? 'selected' : '' }}>{{ $jd->nama }}</option>
                        @endforeach
                    </select>
                    @error('motor')
                        <div class="invalid-feedback mb-2">{{ $message }}</div>
                    @enderror
                    </select>
                </div>
                <div>
                    <label class="form-label @error('tanggalpinjam') text-danger @enderror">Tanggal Pinjam</label>
                    <input class="form-control @error('tanggalpinjam') is-invalid @enderror" type="date" name="tanggalpinjam" value="{{old('tanggalpinjam')}}">
                    @error('tanggalpinjam')
                    <div class="invalid-feedback mb-2">{{$message }}</div?>
                        @enderror
                    </select>
                </div>
                <div>
                    <label class="form-label @error('tanggalselesai') text-danger @enderror">Tanggal Selesai</label>
                    <input class="form-control @error('tanggalselesai') is-invalid @enderror" type="date" name="tanggalselesai" value="{{old('tanggalselesai')}}">
                    @error('tanggalselesai')
                    <div class="invalid-feedback mb-2">{{$message }}</div?>
                        @enderror
                    </select>
                </div>
                <div>
                    <label for="gambarktp"class="form-label @error('gambarktp') text-danger @enderror">Foto KTP</label>
                    <input class="form-control @error('gambarktp') is-invalid @enderror" type="file" name="gambarktp">
                        @error('gambarktp')
                        <div class="invalid-feedback mb-2">{{$message }}</div?>
                            @enderror
                        </select>
                    </div>
                    <div>
            <div class="card-footer">
                <button type="submit" href="{{ url('/') }}" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@extends('layout.master')

@section('title', 'Tambah motor')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/motor') }}">motor</a></li>
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
        <form action="{{ url('/motor') }}" method="POST" enctype="multipart/form-data"> 
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label @error('nopol') text-danger @enderror">No Polisi</label>
                    <input class="form-control @error('nopol') is-invalid @enderror" type="text" name="nopol" value="{{old('nopol')}}">
                    @error('nopol')
                    <div class="invalid-feedback mb-2">{{$message }}</div?>
                        @enderror
                </div>
                <div>
                    <label class="form-label @error('nama') text-danger @enderror">Nama</label>
                    <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback mb-2">{{$message }}</div?>
                        @enderror
                </div>
                <div>
                    <label class="form-label @error('harga') text-danger @enderror">Harga</label>
                    <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga" value="{{old('harga')}}">
                    @error('harga')
                    <div class="invalid-feedback mb-2">{{$message }}</div?>
                        @enderror
                </div>
                <div>
                    <label class="form-label @error('jenismotor') text-danger @enderror">Jenis</label>
                    <select class="form-select @error('jenismotor') is-invalid @enderror" name="jenismotor">
                        @foreach ($jenismotor as $jb)
                            <option value="{{ $jb->id }}" {{old('jenismotor') == $jb->id ? 'selected' : ''}} >{{ $jb->nama }}</option>
                        @endforeach
                        @error('jenismotor')
                        <div class="invalid-feedback mb-2">{{$message }}</div?>
                            @enderror
                    </select>
                </div>
                <div>
                    <label class="form-label @error('merkmotor') text-danger @enderror">Merk</label>
                    <select class="form-select @error('merkmotor') is-invalid @enderror" name="merkmotor">
                        @foreach ($merkmotor as $mb)
                            <option value="{{ $mb->id }}" {{old('merkmotor') == $mb->id ? 'selected' : ''}}>{{ $mb->nama }}</option>
                        @endforeach
                        @error('merkmotor')
                        <div class="invalid-feedback mb-2">{{$message }}</div?>
                            @enderror
                        </select>
                </div>
                <div>
                    <label for="gambar"class="form-label @error('gambar') text-danger @enderror">Gambar motor</label>
                    <input class="form-control @error('gambar') is-invalid @enderror" type="file" name="gambar">
                        @error('gambar')
                        <div class="invalid-feedback mb-2">{{$message }}</div?>
                            @enderror
                        </select>
                    </div>
                    <div>
                        {{-- <label for="date"class="form-label @error('date') text-danger @enderror">Tanggal Pinjam</label>
                        <input class="form-control @error('tanggal') is-invalid @enderror" type="date" name="date">
                            @error('date')
                            <div class="invalid-feedback mb-2">{{$message }}</div?>
                                @enderror
                    </select>
                </div> --}}

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
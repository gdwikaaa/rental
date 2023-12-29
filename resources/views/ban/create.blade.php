
@extends('layout.master')

@section('title', 'Tambah Ban')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/ban') }}">BAN</a></li>
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
                <h4 class="card-title">Form Tambah Ban</h4>
            </div>
        </div>
        <form action="{{ url('/ban') }}" method="POST" enctype="multipart/form-data"> 
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label @error('kdban') text-danger @enderror">Kode BAN</label>
                    <input class="form-control @error('kdban') is-invalid @enderror" type="text" name="kdban" value="{{old('kdban')}}">
                    @error('kdban')
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
                    <label class="form-label @error('jenisban') text-danger @enderror">Jenis</label>
                    <select class="form-select @error('jenisban') is-invalid @enderror" name="jenisban">
                        @foreach ($jenisban as $jb)
                            <option value="{{ $jb->id }}" {{old('jenisban') == $jb->id ? 'selected' : ''}} >{{ $jb->nama }}</option>
                        @endforeach
                        @error('jenisban')
                        <div class="invalid-feedback mb-2">{{$message }}</div?>
                            @enderror
                    </select>
                </div>
                <div>
                    <label class="form-label @error('merkban') text-danger @enderror">Merk</label>
                    <select class="form-select @error('merkban') is-invalid @enderror" name="merkban">
                        @foreach ($merkban as $mb)
                            <option value="{{ $mb->id }}" {{old('merkban') == $mb->id ? 'selected' : ''}}>{{ $mb->nama }}</option>
                        @endforeach
                        @error('merkban')
                        <div class="invalid-feedback mb-2">{{$message }}</div?>
                            @enderror
                        </select>
                </div>
                <div>
                    <label for="gambar"class="form-label @error('gambar') text-danger @enderror">Gambar Ban</label>
                    <input class="form-control @error('gambar') is-invalid @enderror" type="file" name="gambar">
                        @error('gambar')
                        <div class="invalid-feedback mb-2">{{$message }}</div?>
                            @enderror
                        </select>
                    </div>
                    <div>
                        <label for="date"class="form-label @error('date') text-danger @enderror">Tanggal Pinjam</label>
                        <input class="form-control @error('tanggal') is-invalid @enderror" type="date" name="date">
                            @error('date')
                            <div class="invalid-feedback mb-2">{{$message }}</div?>
                                @enderror
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
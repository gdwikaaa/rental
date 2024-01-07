@extends('layout.master')

@section('title', 'Ubah motor')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/motor') }}">motor</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Ubah motor</h4>
            </div>
        </div>
        <form action="{{ url('/motor/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label class="form-label @error('nopol') text-danger @enderror">No Polisi</label>
                <input class="form-control @error('nopol') is-invalid @enderror" type="text" name="nopol" value="{{$motormotor->nopol}}">
                @error('nopol')
                <div class="invalid-feedback mb-2">{{$message }}</div?>
                    @enderror
            </div>
            <div>
                <label class="form-label @error('nama') text-danger @enderror">Nama</label>
                <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{$motormotor->nama}}">
                @error('nama')
                <div class="invalid-feedback mb-2">{{$message }}</div?>
                    @enderror
            </div>
            <div>
                <label class="form-label @error('harga') text-danger @enderror">Harga</label>
                <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga" value="{{$motormotor->harga}}">
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
                        <option value="{{ $mb->id }}" {{$mb->id ? 'selected' : ''}}>{{ $mb->nama }}</option>
                    @endforeach
                    @error('merkmotor')
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
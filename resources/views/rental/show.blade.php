@extends('layout.master')

@section('title', 'Tampilkan motor')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/rental') }}">Rental</a></li>
    <li class="breadcrumb-item active">Tampilkan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Berikut adalah Data dari Rental Motor</div>
            <div class="card-body">
                  <div class="card-body">
                  <p class="card-text">No Rental        : {{ $data->id }}</p>
                  <p class="card-text">No KTP           : {{ $data->noktp }}</p>
                  <p class="card-text">Nama Penyewa     : {{ $data->nama }}</p>
                  <p class="card-text">Motor            : {{ $data->motor->nama }}</p>
                  <p class="card-text">Tanggal Sewa     : {{ $data->tanggalpinjam }}</p>
                  <p class="card-text">Tanggal Selesai  : {{ $data->tanggalselesai }}</p>
                  <img src="{{ asset('storage/gambar-ktp/'.$data->gambarktp) }}" alt="" width="400px" class="img-thumbnail">
                </div>
            </div>
                  <a class="btn btn-sm btn-success" href="{{ url('/rental/') }}">Kembali</a>
                  
              </hr>
            </div>
          </div>
@endsection
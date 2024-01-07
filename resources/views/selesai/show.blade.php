@extends('layout.master')

@section('title', 'Tampilkan motor')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Berikut adalah Data Penyewaan Kendaaran Bermotor Di Gede Bali Rental</div>
            <div class="card-body">
                  <div class="card-body">
                  <p class="card-text">No Rental        : {{ $data->id }}</p>
                  <p class="card-text">No KTP           : {{ $data->noktp }}</p>
                  <p class="card-text">Nama Penyewa     : {{ $data->nama }}</p>
                  <p class="card-text">Motor            : {{ $data->motor->nama }}</p>
                  <p class="card-text">Tanggal Sewa     : {{ $data->tanggalsewa }}</p>
                  <p class="card-text">Tanggal Selesai  : {{ $data->tanggalselesai }}</p>
                  <p class="card-text">Foto KTP         : </p>
                  <img src="{{ asset('storage/gambar-user/'.$data->gambarktp) }}" alt="" width="400px" class="img-thumbnail">
                </div>
            </div>
                  <a class="btn btn-sm btn-success" href="{{ url('/motor/') }}">Kembali</a>
                  
              </hr>
            </div>
          </div>
@endsection
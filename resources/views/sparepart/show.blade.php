@extends('layout.master')

@section('title', 'Tampilkan BAN')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/sparepart') }}">Sparepart</a></li>
    <li class="breadcrumb-item active">Tampilkan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Tampilkan</div>
            <div class="card-body">
                  <div class="card-body">
                  <p class="card-text">Kode Sparepart   : {{ $data->kdbarang }}</p>
                  <p class="card-text">Nama Barang      : {{ $data->nama }}</p>
                  <p class="card-text">harga            : {{ $data->harga }}</p>
                  <p class="card-text">Merk             : {{ $data->merk_nama }}</p>
                  <a class="btn btn-sm btn-success" href="{{ url('/sparepart/') }}">Kembali</a>
              </hr>
            </div>
          </div>
@endsection
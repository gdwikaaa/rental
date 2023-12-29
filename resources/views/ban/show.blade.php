@extends('layout.master')

@section('title', 'Tampilkan Ban')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/sparepart') }}">BAN</a></li>
    <li class="breadcrumb-item active">Tampilkan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Tampilkan</div>
            <div class="card-body">
                  <div class="card-body">
                  <p class="card-text">Kode Ban   : {{ $banban->kdban }}</p>
                  <p class="card-text">Nama Ban      : {{ $banban->nama }}</p>
                  <p class="card-text">harga            : {{ $banban->harga }}</p>
                  <p class="card-text">Jenis Ban            : {{ $banban->jenisban->nama }}</p>
                  <p class="card-text">Merk             : {{ $banban->merkban->nama }}</p>
                  <a class="btn btn-sm btn-success" href="{{ url('/ban/') }}">Kembali</a>
              </hr>
            </div>
          </div>
@endsection
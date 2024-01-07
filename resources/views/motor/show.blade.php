@extends('layout.master')

@section('title', 'Tampilkan motor')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/sparepart') }}">motor</a></li>
    <li class="breadcrumb-item active">Tampilkan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Tampilkan</div>
            <div class="card-body">
                  <div class="card-body">
                  <p class="card-text">Kode motor   : {{ $motormotor->nopol }}</p>
                  <p class="card-text">Nama motor      : {{ $motormotor->nama }}</p>
                  <p class="card-text">harga            : {{ $motormotor->harga }}</p>
                  <p class="card-text">Jenis motor            : {{ $motormotor->jenismotor->nama }}</p>
                  <p class="card-text">Merk             : {{ $motormotor->merkmotor->nama }}</p>
                  <img src="{{ asset('storage/gambar-user/'.$motormotor->gambar) }}" alt="" width="400px" class="img-thumbnail">
                </div>
            </div>
                  <a class="btn btn-sm btn-success" href="{{ url('/motor/') }}">Kembali</a>
                  
              </hr>
            </div>
          </div>
@endsection
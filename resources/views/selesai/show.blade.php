@extends('layout.master')

@section('title', 'Tampilkan motor')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Pendaftaran Rental</div>
            <div class="card-body">
              <div class="card-body">
              <p class="card-text">Terima Kasih Sudah Rental Di tempat Kami, Silahkan datang ke lokasi untuk melakukan pickup Kendaraan anda</p>
            
                  <a class="btn btn-sm btn-success" href="{{ url('/') }}">Kembali</a>
                  
              </hr>
            </div>
          </div>
@endsection
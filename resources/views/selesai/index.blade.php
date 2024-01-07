@extends('layout.master')

@section('title', 'Home')

@section('breadcrumb')
    <li class="breadcrumb-item active">Home</li>
@endsection

@section('content')

				@foreach ($motormotor as $bb)
				<th scope="col">
                                <div class="card" style="width: 18rem;">
									<img src="{{ asset('storage/gambar-user/'.$bb->gambar) }}" class="card-img-top" alt="...">
									<div class="card-body">
									  <h5 class="card-title">{{ $bb->nama }}</h5>
									  <p class="card-text">Rp. {{ $bb->harga }} / Hari</p>
									  <p class="card-text">Motor {{ $bb->jenismotor->nama }}</p>
									  <a href="{{ url('/rental/create') }}" class="btn btn-primary">Rent Now</a>
									</div>
								</th>
                    @endforeach
@endsection
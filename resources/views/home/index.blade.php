@extends('layout.master')

@section('title', 'Home')

@section('breadcrumb')
    <li class="breadcrumb-item active">Home</li>
@endsection

@section('content')
			<div class="row row-cols-1 row-cols-md-3 g-4">	
						@foreach ($motormotor as $bb)
						<div class="col">
                                <div class="card text-white bg-primary mb-3" style="width: 18rem;">
									<img src="{{ asset('storage/gambar-user/'.$bb->gambar) }}" class="card-img-top" alt="Card image cap" width="150px">
									<div class="card-body">
									  <h5 class="card-title">{{ $bb->nama }}</h5>
									  <p class="card-text">Rp. {{ $bb->harga }} / Hari</p>
									  <p class="card-text">Motor {{ $bb->jenismotor->nama }}</p>
									  <a href="{{ url('/rental/create') }}" class="btn btn-light">Rent Now</a>
								</div>
							</div>
						  </div>
                    @endforeach
@endsection
@extends('layout.master')

@section('title', 'Home')

@section('breadcrumb')
    <li class="breadcrumb-item active">Home</li>
@endsection

@section('content')
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-10">
				<h4 class="card-title">Daftar Rental</h4>
			</div>
			<div class="col-2">
				<a class="btn btn-sm btn-primary float-end" href="{{ url('/rental/create') }}">Tambah</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">No Sewa</th>
					<th scope="col">No KTP</th>
					<th scope="col">Nama Penyewa</th>
					<th scope="col">Motor</th>
					<th scope="col">Jenis Motor</th>
					<th scope="col">No Polisi</th>
					<th scope="col">Tanggal Sewa</th>
					<th scope="col">Tanggal Selesai</th>
					<th scope="col">Foto KTP</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($data as $d)
					<tr>
						<td>{{ $d->id }}</td>
						<td>{{ $d->noktp }}</td>
						<td>{{ $d->nama }}</td>
						<td>{{ $d->motor->nama}}</td>
						<td>{{ $d->motor->jenismotor->nama}}</td>
						<td>{{ $d->motor->nopol}}</td>
						<td>{{ $d->tanggalpinjam }}</td>
						<td>{{ $d->tanggalselesai }}</td>
						<td>
							<img src="{{ asset('storage/gambar-ktp/'.$d->gambarktp) }}" alt="" width="150px" class="img-thumbnail">
						</td>
						<td class="float-end">
							<a class="btn btn-sm btn-warning"
								href="{{ url('/rental/' . $d->id . '/edit') }}">Ubah</a>
								<a class="btn btn-sm btn-info"
								href="{{ url('/rental/' . $d->id) }}">Lihat
							</a>

							<form style="display: inline;" action="{{ url('/rental/' . $d->id) }}" method ="POST">
								@csrf
								@method('DELETE')
							<button type="submit" class="btn btn-sm btn-danger">Hapus</button>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
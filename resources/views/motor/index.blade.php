@extends('layout.master')

@section('title', 'motor')

@section('breadcrumb')
    <li class="breadcrumb-item active">Daftar motor</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Daftar Motor Siap Rental</h4>
                </div>
                <div class="col-2">
                    @can('tambah-motor')
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/motor/create') }}">Tambah</a>
                    @endcan
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nomor Polisi</th>
                        <th scope="col">Nama Motor</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jenis Motor</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Gambar</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($motormotor as $bb)
                        <tr>
                            <td>{{ $bb->nopol }}</td>
                            <td>{{ $bb->nama }}</td>
                            <td>Rp. {{ $bb->harga }}</td>
                            <td>{{ $bb->jenismotor->nama }}</td>
                            <td>{{ $bb->merkmotor->nama }}</td>
                            <td>
                                <img src="{{ asset('storage/gambar-user/'.$bb->gambar) }}" alt="" width="150px" class="img-thumbnail">
                            </td>
                            <td class="float-end">
                                @can('tambah-motor')
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/motor/' . $bb->id . '/edit') }}">Ubah</a>
                                    <a class="btn btn-sm btn-info"
                                    href="{{ url('/motor/' . $bb->id) }}">Lihat
                                </a>
                                <form style="display: inline;" action="{{ url('/motor/' . $bb->id) }}" method ="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

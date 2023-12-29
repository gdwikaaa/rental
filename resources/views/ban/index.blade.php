@extends('layout.master')

@section('title', 'BAN')

@section('breadcrumb')
    <li class="breadcrumb-item active">katalog BAN</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Katalog Ban</h4>
                </div>
                <div class="col-2">
                    @can('tambah-ban')
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/ban/create') }}">Tambah</a>
                    @endcan
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Kode BAN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jenis Ban</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Gambar</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banban as $bb)
                        <tr>
                            <td>{{ $bb->id }}</td>
                            <td>{{ $bb->nama }}</td>
                            <td>{{ $bb->harga }}</td>
                            <td>{{ $bb->jenisban->nama }}</td>
                            <td>{{ $bb->merkban->nama }}</td>
                            <td>
                                <img src="{{ asset('storage/gambar-user/'.$bb->gambar) }}" alt="" width="150px" class="img-thumbnail">
                            </td>
                            <td class="float-end">
                                @can('tambah-ban')
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/ban/' . $bb->id . '/edit') }}">Ubah</a>
                                    <a class="btn btn-sm btn-info"
                                    href="{{ url('/ban/' . $bb->id) }}">Lihat
                                </a>
                                <form style="display: inline;" action="{{ url('/ban/' . $bb->id) }}" method ="POST">
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

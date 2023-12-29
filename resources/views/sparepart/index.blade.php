@extends('layout.master')

@section('title', 'Sparepart')

@section('breadcrumb')
    <li class="breadcrumb-item active">Katalog Sparepart</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Katalog Sparepart</h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/sparepart/create') }}">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Merk</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->kdbarang }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>Rp. {{ $d->harga }}</td>
                            <td>{{ $d->merk_nama }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/sparepart/' . $d->id . '/edit') }}">Ubah</a>
                                    <a class="btn btn-sm btn-info"
                                    href="{{ url('/sparepart/' . $d->id) }}">Lihat
                                </a>

                                <form style="display: inline;" action="{{ url('/sparepart/' . $d->id) }}" method ="POST">
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

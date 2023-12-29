<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\sparepart;

class SparepartController extends Controller
{

    public function index()
    {
        // $sparepart = DB::table('sparepart')
        // ->select("sparepart.id", "kdbarang", "sparepart.nama", "sparepart.harga", "merk_id", "merk.nama AS merk_nama")
        // ->join('merk', 'merk.id', '=', 'sparepart.merk_id')
        // ->get();
        $sparepart = sparepart::with('merk')->get();

        return view('sparepart.index', ['data' => $sparepart]);
    }

    public function create()
    {
        $merk = merk::all();
       
        return view('sparepart.create', ['merk' => $merk]);
    }

    public function store(Request $request)
    {
       $sparepart = sparepart::create([
            'kdbarang' => $request->kdbarang,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'merk_id' => $request->merk,
        ]);

        return redirect(url('/sparepart'));
    }

    public function update(Request $request, $id)
    {
        DB::table('sparepart')
        ->where('id', $id)
        ->update([
            'kdbarang' => $request->kdbarang,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'merk_id' => $request->merk,
        ]);

        return redirect(url('/sparepart'));
    }

    public function edit($id)
    {
        $sparepart = DB::table('sparepart')
        ->select("sparepart.id", "kdbarang", "sparepart.nama", "sparepart.harga", "merk_id", "merk.nama AS merk_nama")
        ->join('merk', 'merk.id', '=', 'sparepart.merk_id')
        ->where('sparepart.id', $id)
        ->first();

        $merk = DB::table('merk')->get();

        return view('sparepart.edit', ['data' => $sparepart, 'id' => $id, 'merk' => $merk]);
    }

    public function show($id)
    {
        $sparepart = DB::table('sparepart')
        ->select("sparepart.id", "kdbarang", "sparepart.nama", "sparepart.harga", "merk_id", "merk.nama AS merk_nama")
        ->join('merk', 'merk.id', '=', 'sparepart.merk_id')
        ->where('sparepart.id', $id)
        ->first();

        $merk = DB::table('merk')->get();

        return view('sparepart.show', ['data' => $sparepart, 'id' => $id, 'merk' => $merk]);
    }
    public function destroy($id)
    {
        DB::table('sparepart')
        ->where('id', $id)
        ->delete();

        return redirect(url('/sparepart'));
    }
}

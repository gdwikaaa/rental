<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\motor;
use App\Models\merkmotor;
use App\Models\jenismotor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index()
    {
        $motor = motor::with('merkmotor')->get();
  

        return view('home.index', ['motormotor' => $motor]);
    }

    public function create()
    {
        // $jenismotor = DB::table('jenismotor')->get();
        // $merkmotor = DB::table('merkmotor')->get();
        $merkmotor = merkmotor::all();
        $jenismotor = jenismotor::all();
       
        return view('motor.create', ['jenismotor' => $jenismotor,'merkmotor' => $merkmotor]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nopol' => ['required', 'min:3', 'max:10'],
            'nama' => 'required',
            'harga' => 'required',
            'jenismotor' => ['required', 'exists:jenismotor,id'],
            'merkmotor' => ['required','exists:merkmotor,id'],
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048',

        ]);

        $gambar = $request->file('gambar');
        $filename = date('Y-m-d').$gambar->getClientOriginalName();
        $path   = 'gambar-user/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($gambar));


       $motor = motor::create([
            'nopol' => $validated['nopol'],
            'nama' => $validated['nama'],
            'harga' => $validated['harga'],
            'jenismotor_id' => $validated['jenismotor'],
            'merkmotor_id' => $validated['merkmotor'],
            'gambar' => $filename,
        ]);

        return redirect(url('/'));
    }

    public function update(Request $request, motor $motor)
    {
        $motor->update([
            'nopol' => $request->nopol,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jenismotor_id' => $request->jenismotor,
            'merkmotor_id' => $request->merkmotor,
        ]);

        return redirect(url('/'));
    }

    public function edit(motor $motor)
    {
        $motor->load('jenismotor');
        $motor->load('merkmotor');
        // ->select("motor.id", "nopol", "motor.nama","motor.harga", "jenismotor_id", "jenismotor.nama AS jenismotor_nama" ,"merkmotor_id", "merkmotor.nama AS merkmotor_nama")
        // ->join('merkmotor', 'merkmotor.id', '=', 'motor.merkmotor_id')
        // ->join('jenismotor', 'jenismotor.id', '=', 'motor.jenismotor_id')
        // ->where('motor.id', $id)
        // ->first();

        $jenismotor = jenismotor::all();
        $merkmotor = merkmotor::all();

        return view('motor.edit', ['motormotor' => $motor, 'id' => $motor->id,'jenismotor' => $jenismotor,'merkmotor' => $merkmotor]);
    }

    public function show(motor $motor)
    {
        $motor->load('jenismotor');
        $motor->load('merkmotor');
        // $motor = DB::table('motor')
        // ->select("motor.id", "nopol", "motor.nama","motor.harga", "jenismotor_id", "jenismotor.nama AS jenismotor_nama" ,"merkmotor_id", "merkmotor.nama AS merkmotor_nama")
        // ->join('merkmotor', 'merkmotor.id', '=', 'motor.merkmotor_id')
        // ->join('jenismotor', 'jenismotor.id', '=', 'motor.jenismotor_id')
        // ->where('motor.id', $id)
        // ->first();

        $jenismotor = jenismotor::all();
        $merkmotor = merkmotor::all();

        return view('motor.show', ['motormotor' => $motor, 'id' => $motor->id,'jenismotor' => $jenismotor, 'merkmotor' => $merkmotor]);
    }
    public function destroy(motor $motor)
    {
        $motor->delete();

        return redirect(url('/'));
}
}
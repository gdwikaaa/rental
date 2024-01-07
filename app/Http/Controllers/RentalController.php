<?php

namespace App\Http\Controllers;


use App\Models\jenismotor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\motor;
use App\Models\rental;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;

class RentalController extends Controller
{

    public function index()
    {
        $datarental = Rental::with('motor')->get();
        // $datarental = Rental::with('jenismotor')->get();

        return view('rental.index', ['data' => $datarental]);
    }

    public function create()
    {
        // $jenismotor = DB::table('jenismotor')->get();
        // $merkmotor = DB::table('merkmotor')->get();
        $motor = motor::all();
        // $jenismotor = jenismotor::all();
       
        return view('rental.create', ['motor' => $motor]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'noktp' => ['required', 'min:3', 'max:10'],
            'nama' => 'required',
            'motor' => ['required', 'exists:motor,id'],
            // 'jenismotor' => ['required', 'exists:jenismotor,id'],
            'tanggalpinjam' => 'required',
            'tanggalselesai' => 'required',
            'gambarktp' => 'required|mimes:png,jpg,jpeg|max:2048',

        ]);

        $gambarktp = $request->file('gambarktp');
        $filename = date('Y-m-d').$gambarktp->getClientOriginalName();
        $path   = 'gambar-ktp/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($gambarktp));


       $datarental = rental::create([
            'noktp' => $validated['noktp'],
            'nama' => $validated['nama'],
            'motor_id' => $validated['motor'],
            // 'jenismotor_id' => $validated['jenismotor'],
            'tanggalpinjam' => $validated['tanggalpinjam'],
            'tanggalselesai' => $validated['tanggalselesai'],
            'gambarktp' => $filename,
        ]);

        return redirect(url('/selesai/show'));
    }

    public function update(Request $request, motor $motor)
    {
        $datarental->update([
            'noktp' => $request->noktp,
            'nama' => $request->nama,
            'motor_id' => $request->motor,
            'tanggalpinjam' => $request->tanggalpinjam,
            'tanggal kembali' => $request->tanggalkembali,
            
        ]);

        return redirect(url('/motor'));
    }

    public function edit(motor $motor)
    {
        $data->load('motor');
        // ->select("motor.id", "nopol", "motor.nama","motor.harga", "jenismotor_id", "jenismotor.nama AS jenismotor_nama" ,"merkmotor_id", "merkmotor.nama AS merkmotor_nama")
        // ->join('merkmotor', 'merkmotor.id', '=', 'motor.merkmotor_id')
        // ->join('jenismotor', 'jenismotor.id', '=', 'motor.jenismotor_id')
        // ->where('motor.id', $id)
        // ->first();

        $motor = motor::all();

        return view('rental.edit', ['data' => $datarental, 'id' => $datarental->id,'motor' => $motor]);
    }

    public function show(motor $motor)
    {
        $datarental->load('motor');
        $motor->load('merkmotor');
        // $motor = DB::table('motor')
        // ->select("motor.id", "nopol", "motor.nama","motor.harga", "jenismotor_id", "jenismotor.nama AS jenismotor_nama" ,"merkmotor_id", "merkmotor.nama AS merkmotor_nama")
        // ->join('merkmotor', 'merkmotor.id', '=', 'motor.merkmotor_id')
        // ->join('jenismotor', 'jenismotor.id', '=', 'motor.jenismotor_id')
        // ->where('motor.id', $id)
        // ->first();

        $jenismotor = jenismotor::all();

        return view('motor.show', ['motormotor' => $motor, 'id' => $motor->id,'jenismotor' => $jenismotor]);
    }
    public function destroy(motor $motor)
    {
        $motor->delete();

        return redirect(url('/motor'));
}
}
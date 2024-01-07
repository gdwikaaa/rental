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
        $rental = Rental::with('motor')->get();
        // $datarental = Rental::with('jenismotor')->get();

        return view('rental.index', ['data' => $rental]);
    }

    public function create()
    {
        // $jenismotor = DB::table('jenismotor')->get();S
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
            'tanggalpinjam' => 'required',
            'tanggalselesai' => 'required',
            'gambarktp' => 'required|mimes:png,jpg,jpeg|max:2048',

        ]);

        $gambarktp = $request->file('gambarktp');
        $filename = date('Y-m-d').$gambarktp->getClientOriginalName();
        $path   = 'gambar-ktp/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($gambarktp));


       $rental = rental::create([
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

    public function update(Request $request, rental $rental)
    {
        $rental->update([
            'noktp' => $request->noktp,
            'nama' => $request->nama,
            'motor_id' => $request->motor,
            'tanggalpinjam' => $request->tanggalpinjam,
            'tanggal kembali' => $request->tanggalkembali,
            
        ]);

        return redirect(url('/rental'));
    }

    public function edit(rental $rental)
    {
        $rental->load('motor');

        $motor = motor::all();

        return view('rental.edit', ['data' => $rental, 'id' => $rental->id,'motor' => $motor]);
    }

    public function show(rental $rental)
    {
        $rental->load('motor');

        $motor = motor::all();

        return view('rental.show', ['data' => $rental, 'id' => $rental->id,'motor' => $motor]);
    }
    public function destroy(rental $rental)
    {
        $rental->delete();

        return redirect(url('/rental'));
}
}
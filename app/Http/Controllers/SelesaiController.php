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

class SelesaiController extends Controller
{

    public function index()
    {
        $datarental = rental::with('motor')->get();
        // $datarental = Rental::with('jenismotor')->get();

        return view('selesai.index', ['data' => $datarental]);
    }
    public function show(rental $rental)
    {
        $rental->load('motor');
        // $motor = DB::table('motor')
        // ->select("motor.id", "nopol", "motor.nama","motor.harga", "jenismotor_id", "jenismotor.nama AS jenismotor_nama" ,"merkmotor_id", "merkmotor.nama AS merkmotor_nama")
        // ->join('merkmotor', 'merkmotor.id', '=', 'motor.merkmotor_id')
        // ->join('jenismotor', 'jenismotor.id', '=', 'motor.jenismotor_id')
        // ->where('motor.id', $id)
        // ->first();

        $motor = motor::all();

        return view('selesai.show', ['data' => $rental, 'id' => $rental->id,'motor' => $motor]);
    }

}
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
        $motor = motor::all();

        return view('selesai.show', ['data' => $rental, 'id' => $rental->id,'motor' => $motor]);
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class kendaraan extends Controller
{
    public function index($jenis)
    {
        $vehicles = kendaraan::where('jenis', $jenis)->get();
        return response()->json($vehicles);
    }
}
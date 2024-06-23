<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class MotorcycleController extends Controller
{
    public function  index()
    {
        $motors = Kendaraan::where('Jenis_Kendaraan', 'Motor')->get();

        return view('motorcycle', compact('motors'));
    }
}


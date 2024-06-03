<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Kendaraan::where('Jenis_Kendaraan', 'Mobil')->get();

        return view('cars', compact('cars'));
    }
}

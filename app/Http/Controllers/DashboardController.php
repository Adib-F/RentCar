<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Promo;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil kendaraan jenis Mobil yang tersedia
        $cars = Kendaraan::where('Jenis_Kendaraan', 'Mobil')
                         ->where('Stok', '>', 0)
                         ->inRandomOrder()
                         ->take(3)
                         ->get();

        // Ambil kendaraan jenis Motor yang tersedia
        $motors = Kendaraan::where('Jenis_Kendaraan', 'Motor')
                           ->where('Stok', '>', 0)
                           ->inRandomOrder()
                           ->take(3)
                           ->get();

        // Ambil promo secara acak
        $promos = Promo::inRandomOrder()->take(3)->get();

        return view('dashboard', compact('cars', 'motors', 'promos'));
    }
}

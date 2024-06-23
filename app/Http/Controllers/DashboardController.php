<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Promo;

class DashboardController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::inRandomOrder()->take(3)->get();
        $promos = Promo::inRandomOrder()->take(3)->get();

        return view('dashboard', compact('kendaraans', 'promos'));
    }
}

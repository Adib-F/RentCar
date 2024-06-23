<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kendaraan;
use App\Models\Rental;
use App\Models\Promo;
use App\Models\Status;
use App\Models\Riwayat;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $penggunaCount = User::count();
        $kendaraanCount = Kendaraan::count();
        $rentalCount = Rental::count();
        $promoCount = Promo::count();
        $statusCount = Status::count();
        $riwayatCount = Riwayat::count();

        return view('admindashboard', compact('penggunaCount', 'kendaraanCount', 'rentalCount', 'promoCount', 'statusCount', 'riwayatCount'));
    }

}

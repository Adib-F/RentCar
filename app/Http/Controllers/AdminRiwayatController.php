<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayat;

class AdminRiwayatController extends Controller
{
    public function adminRiwayat()
    {
        $riwayats = Riwayat::with('Rental.User', 'Rental.Kendaraan')->paginate(2);

        return view('AdminRiwayat', compact('riwayats'));
    }
}

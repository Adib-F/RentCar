<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Status;

class StatusController extends Controller
{
    public function index()
{
    $userId = Auth::id();

    $statuses = Status::whereHas('Rental', function ($query) use ($userId) {
        $query->where('Id_Pengguna', $userId);
    })->with(['Rental.User', 'Rental.Kendaraan'])->get();

    // Tambahkan status "Menunggu Konfirmasi Admin" jika belum ada
    foreach ($statuses as $status) {
        if (!$status->Status_Pengiriman) {
            $status->Status_Pengiriman = 'Menunggu Konfirmasi Admin';
        }
    }

    return view('status', compact('statuses'));
}

}

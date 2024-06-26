<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Rental;
use App\Models\Status;

class StatusController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Ambil semua rental terkait pengguna beserta statusnya
        $rentals = Rental::where('Id_Pengguna', $userId)
            ->with(['kendaraan', 'status'])
            ->get();

        return view('status', compact('rentals'));
    }
}

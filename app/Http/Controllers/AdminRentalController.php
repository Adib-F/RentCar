<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Status;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class AdminRentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::with('User', 'Kendaraan', 'Promo')->paginate(7);
        return view('AdminRental', compact('rentals'));
    }

    public function updateRentalStatus(Request $request, $Id_Rental)
    {
        $rental = Rental::find($Id_Rental);

        $rental->Pengajuan = $request->status;
        $rental->save();

        if (in_array($request->status, ['Disetujui', 'Ditolak'])) {
            $status = new Status();
            $status->Id_Rental = $Id_Rental;

            if ($request->status === 'Disetujui') {
                $status->Status_Pengiriman = 'Kendaraan sedang dikirim';
            } else {
                $status->Status_Pengiriman = 'Pengajuan rental ditolak';
            }

            $status->save();
        }

        return redirect()->route('AdminRental')->with('berhasil', 'Status rental berhasil diperbarui');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayat;
use App\Models\Rental;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminRiwayatController extends Controller
{
    public function adminRiwayat()
    {
        $riwayats = Riwayat::with('Rental.User', 'Rental.Kendaraan')->paginate(7);

        return view('AdminRiwayat', compact('riwayats'));
    }

    public function cetakLaporan()
    {
        $riwayatList = Riwayat::with('Rental.User', 'Rental.Kendaraan')->get();
        $data = [];

        foreach ($riwayatList as $riwayat) {
            $data[] = [
                'nama_penyewa' => $riwayat->Rental->User->Nama_Lengkap,
                'kendaraan' => $riwayat->Rental->Kendaraan->Nama_Kendaraan,
                'tanggal_sewa' => $riwayat->Rental->Tanggal_Sewa,
                'tanggal_selesai' => $riwayat->Rental->Tanggal_Selesai,
                'total_harga' => $riwayat->Rental->Total_Harga,
            ];
        }

        $pdf = Pdf::loadView('Laporan', ['data' => $data]);
        return $pdf->download('Laporan.pdf');
    }

}

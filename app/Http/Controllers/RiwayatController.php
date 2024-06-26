<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function riwayat()
    {
        $id_user = Auth::id();

        $riwayats = Riwayat::whereHas('Rental', function ($query) use ($id_user) {
            $query->where('Id_Pengguna', $id_user);
        })->with(['Rental.User', 'Rental.Kendaraan'])->get();

        return view('riwayat', compact('riwayats'));
    }


    public function cetakResi($id_riwayat)
    {
        $riwayat = Riwayat::with('Rental.User', 'Rental.Kendaraan')->where('Id_Riwayat', $id_riwayat)->first();
        $data = [
            // 'gambar' => $riwayat->rental->kendaraan->Gambar,
            'nama_penyewa' => $riwayat->rental->user->Nama_Lengkap,
            'no_handphone' => $riwayat->rental->user->No_Handphone,
            'kendaraan' => $riwayat->rental->kendaraan->Nama_Kendaraan,
            'alamat' => $riwayat->rental->Alamat,
            'jumlah_sewa' => $riwayat->rental->Tanggal_Sewa,
            'total_harga' => $riwayat->rental->Total_Harga,
            'no_pesanan' => $riwayat->No_Pesanan,
        ];

        $pdf = Pdf::loadView('Resi', $data);
        return $pdf->download('Resi.pdf');
    }


}

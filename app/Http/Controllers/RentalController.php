<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function  rental()
    {
        return view('rental');
    }
    public function addRental(Request $request)
    {
        $request->validate([
            'alamat'    => 'required',
            'sim'   => 'required|image|file|mimes:jpeg,png,jpg',
            'tanggal_sewa'             => 'required',
            'tanggal_selesai'              => 'required',
            'total_harga'         => 'required',
            'bukti_pembayaran'            => 'required|image|file|mimes:jpeg,png,jpg',
        ]);

        $sim = $request->file('sim')->store('image/gambarSIM', 'public');
        $buktiPembayaran = $request->file('bukti_pembayaran')->store('image/gambarBukti', 'public');

        $addRental = [
            'Alamat' => $request->alamat,
            'SIM' => $sim,
            'Tanggal_Sewa' => $request->tanggal_sewa,
            'Tanggal_Selesai' => $request->tanggal_selesai, 
            'Total_Harga' => $request->total_harga,
            'Bukti_Pembayaran' => $buktiPembayaran,
        ];

        Rental::create($addRental);

        return redirect()->route('AdminRental');
    }
}


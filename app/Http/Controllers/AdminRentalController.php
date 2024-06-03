<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;

class AdminRentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::with('User', 'Kendaraan', 'Promo')->get();
        return view('AdminRental', compact('rentals'));
    }

    public function updateRental(Request $request, $id_rental)
{
    $request->validate([
        'alamat'            => 'required',
        'sim'               => 'image|file|mimes:jpg,png,jpg',
        'tanggal_sewa'      => 'required',
        'tanggal_selesai'   => 'required',
        'bukti_pembayaran'  => 'image|file|mimes:jpeg,png,jpg',
    ]);

    $promo = Rental::findOrFail($id_rental);

    $updateData = [
        'Alamat'            => $request->alamat,
        'SIM'               => $request->file('sim')->store('image/gambarSIM', 'public'),
        'Tanggal_Sewa'      => $request->tanggal_sewa,
        'Tanggal_Selesai'   => $request->tanggal_selesai,
        'Bukti_Pembayaran'  => $request->file('bukti_pembayaran')->store('image/gambarBukti', 'public'),
    ];
    $promo->update($updateData);

    return redirect()->route('AdminPromo');
    }

    public function deleteRental($id_rental){
        $kendaraan = Rental::findOrFail($id_rental);
        $kendaraan->delete();

        return redirect()->route('AdminRental');
    }
}

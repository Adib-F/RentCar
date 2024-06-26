<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Rental;
use App\Models\KlaimPromo;
use Auth;

class RentalController extends Controller
{
    public function index()
    {
        return view('rental');
    }

    public function cekRental()
    {
        $ongoingRental = Rental::where('Id_Pengguna', Auth::id())
            ->where(function ($query) {
                $query->whereHas('status', function ($subquery) {
                    $subquery->whereIn('Status_Pengiriman', ['Kendaraan dalam perjalanan', 'Kendaraan sedang dikirim']);
                })
                ->orWhere('Pengajuan', 'Menunggu Konfirmasi Admin');
            })
            ->first();

        return $ongoingRental ? true : false;
    }


    public function showRentalForm($kendaraanId)
    {
        if (Auth::check() && $this->cekRental()) {
            return back()->with('berhasil', 'Anda belum menyelesaikan rental sebelumnya');
        }

        $kendaraan = Kendaraan::find($kendaraanId);
        $promos = KlaimPromo::where('Status', 'Belum_digunakan')
            ->where('Id_Pengguna', Auth::id())
            ->with('Promo')
            ->get();

        return view('rental', compact('kendaraan', 'promos'));
    }


    public function addRental(Request $request, $kendaraanId)
    {
        $request->validate([
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
            'sim' => 'required|file|mimes:jpeg,png,jpg',
            'tanggal_sewa' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_sewa',
            'promo' => 'nullable|exists:Promo,Id_Promo',
            'total_harga' => 'required',
            'bukti_pembayaran' => 'required|file|mimes:jpeg,png,jpg',
        ]);

        $simPath = $request->file('sim')->store('image/gambarSIM', 'public');
        $buktiPembayaranPath = $request->file('bukti_pembayaran')->store('image/GambarBukti', 'public');

        $rentalData = [
            'Id_Pengguna' => auth()->id(),
            'Id_Kendaraan' => $kendaraanId,
            'Alamat' => $request->alamat,
            'No_Handphone' => $request->no_telepon,
            'SIM' => $simPath,
            'Tanggal_Sewa' => $request->tanggal_sewa,
            'Tanggal_Selesai' => $request->tanggal_selesai,
            'Id_Promo' => $request->promo,
            'Total_Harga' => $request->total_harga,
            'Bukti_Pembayaran' => $buktiPembayaranPath,
        ];

        Rental::create($rentalData);

        $kendaraan = Kendaraan::find($kendaraanId);
        $kendaraan->Stok -= 1;
        $kendaraan->save();

        if ($request->promo) {
            KlaimPromo::where('Id_Promo', $request->promo)
                ->where('Id_Pengguna', auth()->id())
                ->update(['Status' => 'Sudah_digunakan']);
        }

        return redirect()->route('dashboard')->with('success', 'Rental berhasil ditambahkan');
    }


}

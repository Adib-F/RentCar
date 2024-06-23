<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Riwayat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;

class AdminStatusController extends Controller
{
    public function adminStatus()
    {
        $statuss = Status::with('Rental.User', 'Rental.Kendaraan')->paginate(7);

        return view('AdminStatus', compact('statuss'));
    }

    public function updatePengiriman(Request $request, $idStatus)
    {
        $rules = [
            'status' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $status = Status::find($idStatus);

        $status->update([
            'Status_Pengiriman' => $request->input('status'),
        ]);

        if ($request->input('status') === 'Kendaraan telah sampai') {
            $riwayat = new Riwayat();
            $riwayat->Id_Rental = $status->Id_Rental;
            $riwayat->Id_Status = $status->Id_Status;
            $riwayat->No_Pesanan = Str::random(10);
            $riwayat->save();
        }

        return redirect()->route('AdminStatus')->with('berhasil', 'Status pengiriman berhasil diperbarui.');
    }

}

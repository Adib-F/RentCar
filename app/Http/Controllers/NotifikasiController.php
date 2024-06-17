<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;
use App\Models\Pengguna; 
use App\Models\Rental; 

class NotifikasiController extends Controller
{

    public function index()
    {
        $notifikasis = Notifikasi::all();
        return view('Notifikasi', compact('notifikasis'));
    }

    public function Notifikasi(Request $request)
    {
        $request->validate([
            'Id_Pengguna' => 'required|exists:pengguna,Id_Pengguna', 
            'Id_Rental' => 'required|exists:rental,Id_Rental', 
            'Pengajuan' => 'required|in:Disetujui,Ditolak',
            'Pesan' => 'required|string',
        ]);

        $notifikasi = Notifikasi::create([
            'Id_Pengguna' => $request->Id_Pengguna,
            'Id_Rental' => $request->Id_Rental,
            'Pengajuan' => $request->Pengajuan,
            'Pesan' => $request->Pesan,
        ]);

        return response()->json(['message' => 'Notifikasi berhasil disimpan!', 'notifikasi' => $notifikasi], 201);
    }

    // Menandai notifikasi sebagai sudah dibaca
    public function markAsRead($id)
    {
        $notifikasi = Notifikasi::findOrFail($id);
        $notifikasi->sudah_dibaca = true;
        $notifikasi->save();

        return response()->json(['message' => 'Notifikasi berhasil ditandai sebagai sudah dibaca!'], 200);
    }
}

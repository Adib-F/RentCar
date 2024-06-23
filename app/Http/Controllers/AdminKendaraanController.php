<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminKendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::paginate(7);
        return view('AdminKendaraan', compact('kendaraans'));
    }

    public function addKendaraan(Request $request)
    {
        $request->validate([
            'nama_kendaraan'    => 'required',
            'jenis_kendaraan'   => 'required',
            'merk'              => 'required',
            'harga'             => 'required',
            'stok'              => 'required',
            'deskripsi'         => 'required',
            'gambar'            => 'required|image|file|mimes:jpeg,png,jpg',
        ]);

        $namaGambar = $request->file('gambar')->store('image/gambarKendaraan', 'public');

        $addkendaraan = [
            'Nama_Kendaraan'  => $request->nama_kendaraan,
            'Jenis_Kendaraan' => $request->jenis_kendaraan,
            'Merk'            => $request->merk,
            'Harga'           => $request->harga,
            'Stok'            => $request->stok,
            'Gambar'          => $namaGambar,
            'Deskripsi'       => $request->deskripsi,
        ];

        Kendaraan::create($addkendaraan);

        return redirect()->route('AdminKendaraan')->with('berhasil' , 'Data kendaraan berhasil ditambah');
    }


    public function updateKendaraan(Request $request, $id_kendaraan)
{
    $request->validate([
        'nama_kendaraan' => 'required',
        'jenis_kendaraan' => '',
        'merk' => 'required',
        'harga' => 'required',
        'stok' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'image|mimes:jpeg,png,jpg',
    ]);

    $kendaraan = Kendaraan::findOrFail($id_kendaraan);

    $updateData = [
        'Nama_Kendaraan'  => $request->nama_kendaraan,
        'Jenis_Kendaraan' => $request->jenis_kendaraan,
        'Merk'            => $request->merk,
        'Harga'           => $request->harga,
        'Stok'            => $request->stok,
        'Deskripsi'       => $request->deskripsi,
    ];

    if ($request->hasFile('gambar')) {
        $namaGambar = $request->file('gambar')->store('image/gambarKendaraan', 'public');
        $updateData['Gambar'] = $namaGambar;
    }

    $kendaraan->update($updateData);

    return redirect()->route('AdminKendaraan')->with('berhasil' , 'Data kendaraan berhasil diupdate');
}


    public function deleteKendaraan($id_kendaraan){
        $kendaraan = Kendaraan::findOrFail($id_kendaraan);
        $kendaraan->delete();

        return redirect()->route('AdminKendaraan')->with('berhasil' , 'Data kendaraan berhasil dihapus');
    }

}

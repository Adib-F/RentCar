<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Promo;
use App\Models\KlaimPromo;

class AdminPromoController extends Controller
{
    public function index()
    {
        $promos = Promo::paginate(3);
        return view('Adminpromo', compact('promos'));
    }


    public function addPromo(Request $request)
    {
        $request->validate([
            'nama_promo' => 'required',
            'deskripsi' => 'required',
            'diskon' => 'required',
            'gambar' => 'required|image|file|mimes:jpeg,png,jpg',
        ]);

        $namaGambar = $request->file('gambar')->store('image/gambarPromo', 'public');

        $addPromo = [
            'Nama_Promo' => $request->nama_promo,
            'Deskripsi' => $request->deskripsi,
            'Diskon' => $request->diskon,
            'Gambar' => $namaGambar,
        ];

        Promo::create($addPromo);

        return redirect()->route('AdminPromo')->with('berhasil', 'Data Promo berhasil ditambahkan');
    }

    public function updatePromo(Request $request, $id_promo)
    {
        $request->validate([
            'nama_promo' => 'required',
            'deskripsi' => 'required',
            'diskon' => 'required',
            'gambar' => 'image|file|mimes:jpeg,png,jpg',
        ]);

        $promo = Promo::findOrFail($id_promo);

        $updateData = [
            'Nama_Promo' => $request->nama_promo,
            'Deskripsi' => $request->deskripsi,
            'Diskon' => $request->diskon,
        ];

        if ($request->hasFile('gambar')) {
            $updateData['Gambar'] = $request->file('gambar')->store('image/gambarPromo', 'public');
        }

        $promo->update($updateData);

        return redirect()->route('AdminPromo')->with('berhasil', 'Data Promo berhasil diupdate');
    }

    public function deletePromo($id_promo)
    {
        $promo = Promo::findOrFail($id_promo);
        $promo->delete();

        return redirect()->route('AdminPromo')->with('berhasil', 'Data Promo berhasil dihapus');
    }

    public function klaimPromo(Request $request, $id)
    {
        $user = Auth::user();

        $klaimPromo = new KlaimPromo();
        $klaimPromo->Id_Pengguna = $user->Id_Pengguna;
        $klaimPromo->Id_Promo = $id;
        $klaimPromo->Status = 'Belum_digunakan';
        $klaimPromo->save();

        return redirect()->back()->with('success', 'Promo berhasil diklaim');
    }

}

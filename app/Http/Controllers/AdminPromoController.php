<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Promo;


class AdminPromoController extends Controller
{
    public function index()
    {
        $promos = Promo::all();
        return view('Adminpromo', compact('promos'));
    }

    public function addPromo(Request $request)
    {
        $request->validate([
            'nama_promo'        => 'required',
            'deskripsi'         => 'required',
            'diskon'            => 'required',
            'gambar'            => 'required|image|file|mimes:jpeg,png,jpg',
        ]);

        $namaGambar = $request->file('gambar')->store('image/gambarPromo', 'public');

        $addPromo = [
            'Nama_Promo'        => $request->nama_promo,
            'Deskripsi'         => $request->deskripsi,
            'Diskon'            => $request->diskon,
            'Gambar'            => $namaGambar,
        ];

        Promo::create($addPromo);

        return redirect()->route('AdminPromo');
    }

    public function updatePromo(Request $request, $id_promo)
{
    $request->validate([
        'nama_promo'        => 'required',
        'deskripsi'         => 'required',
        'diskon'            => 'required',
        'gambar'            => 'image|file|mimes:jpeg,png,jpg',
    ]);

    $promo = Promo::findOrFail($id_promo);

    $updateData = [
        'Nama_Promo'        => $request->nama_promo,
        'Deskripsi'         => $request->deskripsi,
        'Diskon'            => $request->diskon,
        'Gambar'            => $request->file('gambar')->store('image/gambarPromo', 'public')
    ];
    $promo->update($updateData);

    return redirect()->route('AdminPromo');
}

    public function deletePromo($id_promo){
        $promo = Promo::findOrFail($id_promo);
        $promo->delete();

        return redirect()->route('AdminPromo');
    }

    public function claimPromo(Request $request, $id_promo)
    {
        $user = Auth::user();

        $promo = Promo::findOrFail($id_promo);
        $promo->claimed_by = $user->id;
        $promo->save();

        return redirect()->back()->with('success', 'Promo berhasil diklaim!');
    }
}

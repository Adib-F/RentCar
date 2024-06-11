<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminPenggunaController extends Controller
{
    public function index()
    {
        $penggunas = User::query()->paginate(7);
        return view('AdminPengguna', compact('penggunas'));
    }

    public function addPengguna(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required',
            'no_handphone' => 'required|max:15',
            'nik' => 'required|max:16',
            'email' => 'required|unique:Pengguna|email',
            'password' => [
                'required',
                'regex:/^(?=.*[A-Z])(?=.*[!@#$%^&*()\-_=+{};:,<.>ยง~])(?=.*[0-9]).{8,}$/',
            ],
        ], [
            'email.unique' => 'Email sudah digunakan.',
            'password.regex' => 'Password yang diberikan tidak sesaui kriteria',
        ]);

        $adduser = [
            'Nama_Lengkap' => $request->nama_lengkap,
            'Username' => $request->username,
            'No_Handphone' => $request->no_handphone,
            'NIK' => $request->nik,
            'Email' => $request->email,
            'Password' => Hash::make($request->password),
        ];

        User::create($adduser);

        return redirect()->route('AdminPengguna')->with('berhasil', 'Data Pengguna berhasil ditambakan');
    }

    public function updatePengguna(Request $request, $id_pengguna)
    {

        $request->validate(
            [
                'nama_lengkap' => 'required',
                'username' => 'required',
                'no_handphone' => 'required|max:15',
                'roles' => 'nullable',
                'nik' => 'required|max:16',
                'email' => 'required',
                'password' => 'nullable',
            ],
            [
                'email.unique' => 'Email sudah digunakan.',
            ],
        );

        $pengguna = User::findOrFail($id_pengguna);
        $pengguna->Nama_Lengkap = $request->input('nama_lengkap');
        $pengguna->Username = $request->input('username');
        $pengguna->No_Handphone = $request->input('no_handphone');
        $pengguna->NIK = $request->input('nik');
        $pengguna->Roles = $request->input('roles');
        $pengguna->Email = $request->input('email');
        $pengguna->Password = Hash::make($request->input('password'));

        $pengguna->save();

        return redirect()->route('AdminPengguna')->with('berhasil', ' Data Pengguna berhasil diupdate');
    }

    public function deletePengguna($id_pengguna)
    {
        $pengguna = User::findOrFail($id_pengguna);
        $pengguna->delete();

        return redirect()->route('AdminPengguna')->with('berhasil', ' Data Pengguna berhasil dihapus');
    }

}

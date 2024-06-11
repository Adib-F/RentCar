<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function register_proses(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required',
            'no_handphone' => 'required',
            'nik' => 'required',
            'email' => 'required|unique:pengguna|email',
            'password' => 'required',
        ],[
            'nama_lengkap.required' => 'Nama Lengkap harus diisi',
            'username.required' => 'Username harus diisi',
            'no_handphone.required' => 'No Handphone harus diisi',
            'nik.required' => 'NIK harus diisi',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah terdaftar',
            'email.email' => 'Email harus diisi dengan format email',
            'password.required' => 'Password harus diisi',
        ]);

        $inforegister = [
            'Nama_Lengkap' => $request->nama_lengkap,
            'Username' => $request->username,
            'No_Handphone' => $request->no_handphone,
            'NIK' => $request->nik,
            'Email' => $request->email,
            'Password' => Hash::make($request->password),

        ];

        User::create($inforegister);

        return redirect()->route('login')->with('berhasil', 'Pendaftaran berhasil');
    }
}

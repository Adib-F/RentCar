<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth,Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $datauser = [
            'Email' => $request->email,
            'Password' => $request->password,
        ];

        $user = User::where('Email', $request->email)->get()->first();
        if ($user && Hash::check($request->password, $user->Password)) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            // Jika autentikasi gagal
            return redirect()->route('login')->with('error', 'Email atau password salah');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('succes', 'Logout Berhasil');
    }
}

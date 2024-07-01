<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function  setting()
    {
        return view('setting');
    }

    public function update_profile(Request $request , $id_pengguna){
        $user = auth()->user();

        $request->validate([
            'username' => 'required|max:15',
            'password' => 'required',
            'no_handphone' => 'required|max:15',
            'nik' => 'required',
        ]);

        $user->Username = $request->input('username');
        $user->Password = $request->input('password');
        $user->No_Handphone = $request->input('no_handphone');
        $user->NIK = $request->input('nik');

        $user->save();

        return redirect()->back()->with('berhasil', 'Profile berhasil di update');
    }
}


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
            'username' => 'required|max:255',
            'no_handphone' => 'required|max:15',
        ]);

        $user->Username = $request->input('username');
        $user->No_Handphone = $request->input('no_handphone');

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}


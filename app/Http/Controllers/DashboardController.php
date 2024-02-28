<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard($dash){
        return view('dashboard', ['dash' => $dash]);
    }
}

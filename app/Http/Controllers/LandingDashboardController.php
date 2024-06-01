<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingDashboardController extends Controller
{
    public function  landingdashboard()
    {
        return view('landingdashboard');
    }
}

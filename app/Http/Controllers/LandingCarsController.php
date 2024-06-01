<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingCarsController extends Controller
{
    public function  landingcars()
    {
        return view('landingcars');
    }
}

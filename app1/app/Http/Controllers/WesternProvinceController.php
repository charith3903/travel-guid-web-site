<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WesternProvinceController extends Controller
{
    public function index()
    {
        return view('frontend.province.westernprovince');
    }
}

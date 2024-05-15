<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SouthernPrivinceController extends Controller
{
    public function index()
    {
        return view('frontend.province.southernprovince');
    }
}
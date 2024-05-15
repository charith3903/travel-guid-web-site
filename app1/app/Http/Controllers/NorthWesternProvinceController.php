<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NorthWesternProvinceController extends Controller
{
    public function index()
    {
        return view('frontend.province.northwesternprovince');
    }
}

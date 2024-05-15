<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NorthernProvinceController extends Controller
{
    public function index()
    {
        return view('frontend.province.northernprovince');
    }
}

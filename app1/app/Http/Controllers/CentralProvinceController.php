<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentralProvinceController extends Controller
{
    public function index()
    {
        return view('frontend.province.centralprovince');
    }
}

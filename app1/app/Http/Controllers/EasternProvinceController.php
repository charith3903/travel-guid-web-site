<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EasternProvinceController extends Controller
{
    public function index()
    {
        return view('frontend.province.easternprovince');
    }
}

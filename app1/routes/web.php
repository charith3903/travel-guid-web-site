<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

route::get('/', [HomeController::class, 'index']);
route::get('/about', [AboutController::class, 'index']);
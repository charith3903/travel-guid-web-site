<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DetailsController;

route::get('/', [HomeController::class, 'index']);
route::get('/about', [AboutController::class, 'index']);
route::get('/details', [DetailsController::class, 'index']);
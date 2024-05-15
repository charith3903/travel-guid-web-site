<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CentralProvinceController;
use App\Http\Controllers\SouthernProvinceController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\EasternProvinceController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\NorthCentralProvinceController;
use App\Http\Controllers\NorthernProvinceController;
use App\Http\Controllers\NorthWesternProvinceController;
use App\Http\Controllers\SabaragamuwaProvinceController;
use App\Http\Controllers\UvaProvinceController;
use App\Http\Controllers\WesternProvinceController;

route::get('/', [HomeController::class, 'index']);
route::get('/about', [AboutController::class, 'index']);
route::get('/details', [DetailsController::class, 'index']);
route::get('/centralprovince', [CentralProvinceController::class, 'index']);
route::get('/southernprovince', [SouthernProvinceController::class, 'index']);
route::get('/westernprovince', [WesternProvinceController::class, 'index']);
route::get('/northernprovince', [NorthernProvinceController::class, 'index']);
route::get('/easternprovince', [EasternProvinceController::class, 'index']);
route::get('/northwesternprovince', [NorthWesternProvinceController::class, 'index']);
route::get('/northcentralprovince', [NorthCentralProvinceController::class, 'index']);
route::get('/uvaprovince', [UvaProvinceController::class, 'index']);
route::get('/sabaragamuwaprovince', [SabaragamuwaProvinceController::class, 'index']);
route::get('/hotels', [HotelController::class, 'index']);
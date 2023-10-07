<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\Latest_CarsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimoniesController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/homes', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/brands', [BrandsController::class, 'index']);

Route::get('/cars', [CarsController::class, 'index']);

Route::get('/latestcars', [Latest_CarsController::class, 'index']);


Route::get('/service', [ServicesController::class, 'index']);

Route::get('/testimonies', [TestimoniesController::class, 'index']);

Route::post('/contact', [ContactController::class, 'store']);

Route::get('/footer', [FooterController::class, 'index']);

Route::get('/setting', [SettingController::class, 'index']);
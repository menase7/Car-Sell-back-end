<?php

use App\Models\Home;
use App\Models\Contact;
use App\Models\About;
use App\Models\Brands;
use App\Models\Services;
use App\Models\Footer;
use App\Models\Setting;
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

Route::get('/homes', function () {
    $resources = Home::all();
    return response()->json($resources);
});

Route::get('/about', function () {
    $resources = About::all();
    return response()->json($resources);
});

Route::get('/brands', function () {
    $resources = Brands::all();

    // Convert the image data to base64
    $resources->transform(function ($brand) {
        $brand->logo_image = base64_encode($brand->logo_image);
        return $brand;
    });

    return response()->json($resources);
});

Route::get('/service', function () {
    $resource = Services::all();
    return response()->json($resource);
});


Route::post('/contact', function (Request $request) {
    $data = $request->only([
        'contact_name',
        'contact_email',
        'contact_message',
    ]);

    $resource = Contact::create($data);

    return response()->json($resource, 201);
});

Route::get('/footer', function () {
    $resource = Footer::all();
    return response()->json($resource);
});

Route::get('/setting', function () {
    $resource = Setting::all();
    return response()->json($resource);
});
<?php

use App\Models\Home;
use App\Models\Contact;
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


Route::post('/contact', function (Request $request) {
    $data = $request->only([
        'contact_name',
        'contact_email',
        'contact_message',
    ]);

    $resource = Contact::create($data);

    return response()->json($resource, 201);
});
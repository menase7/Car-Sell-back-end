<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;


class Latest_CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
 {
    $cars = Cars::where('price', '>', 20000)->get();

    $cars->each(function ($car) {
        $car->images = asset('/storage/' . $car->images);
    });

    return response()->json($cars);
 }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

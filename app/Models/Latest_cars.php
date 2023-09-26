<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latest_cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'cars_id',
        'latest_car_heading',
        'latest_car_image',
    ];
}

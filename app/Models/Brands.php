<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'logo_image',
        'status',
    ];

    protected function Cars(){
        return $this->hasMany(Cars::class);
    }
}

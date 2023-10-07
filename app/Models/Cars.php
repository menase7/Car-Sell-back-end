<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'description',
        'price',
        'discounted_price',
        'images',
        'brands_id',
    ];

    public function Brands()
    {
        return $this->belongsTo(Brands::class);
    }

    public function Testimonies()
    {
        return $this->hasMany(Testimonies::class);
    }
}

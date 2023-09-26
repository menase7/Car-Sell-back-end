<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonies extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'cars_id',
        'name',
        'message',
        'image',
    ];

    public function Cars(){
        return $this->belongsTo(Cars::class);
    }
}

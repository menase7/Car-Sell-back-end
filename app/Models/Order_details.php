<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'qty',
        'total'
    ];

    protected function Cars(){
        return $this->belongsTo(Cars::class);
    }

    protected function Orders(){
        return $this->belongsTo(Orders::class);
    }
}

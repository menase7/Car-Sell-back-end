<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'Company_name',
        'Company_phone',
        'Company_address',
        'Company_location',
        'Company_email',
        'Company_facebook',
        'Company_instagram',
        'Company_twitter',
        'Company_linkdin',
        'Company_logo',
    ];
} 

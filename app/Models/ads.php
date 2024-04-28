<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ads extends Model
{
    use HasFactory;



    protected $fillable = [
        'user_name',
        'user_nic',
        'shop_name',
        'shop_address',
        'phone_number',
        'vegetables',
        'description',
        'status',
        'image',
        'city'
    ];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Items extends Model
{
    use HasFactory;
    protected $table = 'order__items';
    protected $fillable = [
        'order_id',
        'prod_id',
        'qty',
        'price',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'spacing',
        'depth',
        'cost_per_plant',
        'fertilizer_cost',
        'expected_yield_per_plant', 
        'current_market_price',
        'harvest_sale_price_per_kg',
    ];
}

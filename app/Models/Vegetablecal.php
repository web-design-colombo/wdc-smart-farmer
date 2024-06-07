<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetablecal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'days_to_harvest',
        'fertilizer_per_sq_meter'
    ];
}

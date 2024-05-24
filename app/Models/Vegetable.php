<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    use HasFactory;
    protected $table = 'vegetables';
    protected $fillable = [
        'name',
        'imgae',
        'heading',
        'heading_description',
        'variety',
        'variety_image',
        'climaticrequirements',
        'areas',
        'soil_image',
        'soil',
        'Seed_requirement',
        'Nursery_Management',
        'Land _preparation',
        'Planting',
        'Spacing',
        'Fertilizer',
        'Water_supply',
        'Weed_Control',
        'Pest_Management',
        'Disease_Management',
        'Harvesting',
        'Yield',
    ];



}

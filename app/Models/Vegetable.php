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
        'heading',
        'heading_description',
        'first_description',
        'first_image',
        'variety_image',
        'variety_description',
        'soil_image',
        'soil_preparation',
        'planting_image',
        'planting_techniques',
        'care_image',
        'watering_practices_dis',
        'watering_practices',
        'fertilization_strategy_dis',
        'fertilization_strategy',
        'weed_management_dis',
        'weed_management',
        'managing_pests_and_diseases',
        'harvesting_discription',
        'harvesting_table',
        'post_harvesthandling_discription',
        'post_harvesthandling',
        'post_harvesthandling_table',
        'faqs',
        'common_mistakestoavoid',
        'advanced_tips_for_maximizing_yield',
    ];

}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VegetableSeeder extends Seeder
{
    public function run()
    {
        $vegetables = [
            [
                'name' => 'Tomato',
                'spacing' => 30,
                'depth' => 10,
                'cost_per_plant' => 5,
                'fertilizer_cost' => 1000,
                'expected_yield_per_plant' => 5, // Example value
                'current_market_price' => 200,  // Example value
                'harvest_sale_price_per_kg' => 250, // Example value
            ],
            [
                'name' => 'Onion',
                'spacing' => 10,
                'depth' => 5,
                'cost_per_plant' => 6,
                'fertilizer_cost' => 1500,
                'expected_yield_per_plant' => 8, // Example value
                'current_market_price' => 314,  // Example value
                'harvest_sale_price_per_kg' => 350, // Example value
            ],
            // Add more vegetables as needed
        ];

        DB::table('vegetables')->insert($vegetables);
    }
}

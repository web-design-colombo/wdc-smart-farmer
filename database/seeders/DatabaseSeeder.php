<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VegetableSeeder extends Seeder
{
    public function run()
    {
        $vegetables = [
            ['name' => 'Tomato', 'spacing' => 30, 'depth' => 10, 'cost_per_plant' => 2.5, 'fertilizer_cost' => 10],
            ['name' => 'Onion', 'spacing' => 10, 'depth' => 5, 'cost_per_plant' => 1.5, 'fertilizer_cost' => 8],
            ['name' => 'Carrot', 'spacing' => 15, 'depth' => 8, 'cost_per_plant' => 1, 'fertilizer_cost' => 5],
            ['name' => 'Cabbage', 'spacing' => 40, 'depth' => 15, 'cost_per_plant' => 3, 'fertilizer_cost' => 12],
            ['name' => 'Bell Pepper', 'spacing' => 25, 'depth' => 12, 'cost_per_plant' => 2, 'fertilizer_cost' => 9],
        ];

        DB::table('vegetables')->insert($vegetables);
    }
}

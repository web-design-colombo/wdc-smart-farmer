<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HarvestController extends Controller
{
    // Get the list of cities (hardcoded for Sri Lanka)
    public function getCities()
    {
        $cities = [
            ['name' => 'Colombo'],
            ['name' => 'Kandy'],
            ['name' => 'Galle'],
            ['name' => 'Matara'],
            ['name' => 'Jaffna'],
        ];

        return response()->json(['cities' => $cities]);
    }

    // Get the list of vegetables (hardcoded)
    public function getVegetables()
    {
        $vegetables = [
            ['name' => 'Tomato'],
            ['name' => 'Potato'],
            ['name' => 'Carrot'],
            ['name' => 'Spinach'],
            ['name' => 'Cabbage'],
        ];

        return response()->json(['vegetables' => $vegetables]);
    }
}


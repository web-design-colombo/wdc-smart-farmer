<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vegetable;

class VegetableController extends Controller
{
    public function index()
    {
        $vegetables = Vegetable::all();
        return view('vegetable-buy', compact('vegetables'));
    }

    public function calculate(Request $request)
    {
        $landSize = $request->input('land_size');
        $selectedVegetableId = $request->input('selected_vegetable');

        $totalPlantCost = 0;
        $totalFertilizerCost = 0;
        $totalNumberOfPlants = 0;
        $salePriceAtHarvest = 0;
        $salePriceToday = 0;

        $vegetable = Vegetable::find($selectedVegetableId);

        if ($vegetable) {
            $spacing = $vegetable->spacing;
            $depth = $vegetable->depth;
            $costPerPlant = $vegetable->cost_per_plant;
            $fertilizerCost = $vegetable->fertilizer_cost;

            // Calculate total number of plants
            $totalNumberOfPlants = floor($landSize / ($spacing + $depth));

            // Calculate total plant cost and fertilizer cost
            $totalPlantCost = $totalNumberOfPlants * $costPerPlant;
            $totalFertilizerCost = $totalNumberOfPlants * $fertilizerCost;

            // Calculate sale price per 1kg at harvest time and today
            $salePriceAtHarvest = $vegetable->harvest_sale_price_per_kg * $vegetable->expected_yield_per_plant;
            $salePriceToday = $vegetable->current_market_price * $totalNumberOfPlants * $vegetable->expected_yield_per_plant;
        }

        return view('vegetable-result', [
            'totalPlantCost' => $totalPlantCost,
            'totalFertilizerCost' => $totalFertilizerCost,
            'totalNumberOfPlants' => $totalNumberOfPlants,
            'salePriceAtHarvest' => $salePriceAtHarvest,
            'salePriceToday' => $salePriceToday,
            'selectedVegetable' => $vegetable,
        ]);

    }
}

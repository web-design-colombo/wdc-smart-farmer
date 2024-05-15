<?php

namespace App\Http\Controllers;

use App\Models\Vegetable;
use Illuminate\Http\Request;

class VegetableController extends Controller
{
    public function index()
    {
        $Vegetables = Vegetable::all();
        return view('admin.vegetables.create', compact('Vegetables'));

    }
    // indexfront
    public function indexfront()
    {
        $Vegetables = Vegetable::all();
        return view('vegetables.vegetables', compact('Vegetables'));

    }

    public function create(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'heading' => 'required|string',
            'heading_description' => 'required|string',
            'first_description' => 'required|string',
            'variety_description' => 'required|array',
            'soil_preparation' => 'required|array',
            'planting_techniques' => 'required|array',
            'watering_practices_dis' => 'required|string',
            'watering_practices' => 'required|array',
            'fertilization_strategy_dis' => 'required|string',
            'fertilization_strategy' => 'required|array',
            'weed_management_dis' => 'required|string',
            'weed_management' => 'required|array',
            'managing_pests_and_diseases' => 'required|string',
            'harvesting_discription' => 'required|string',
            'harvesting_table' => 'required|array',
            'faqs' => 'required|array',
            'common_mistakestoavoid' => 'required|array',
            'advanced_tips_for_maximizing_yield' => 'required|array',
            'first_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'variety_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'soil_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'planting_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'care_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Create a new Vegetable instance
        $vegetable = new Vegetable();

        // Assign values from the request to the Vegetable instance
        $vegetable->name = $validatedData['name'];
        $vegetable->heading = $validatedData['heading'];
        $vegetable->heading_description = $validatedData['heading_description'];
        $vegetable->first_description = $validatedData['first_description'];

        // Handle image uploads and assign filenames to the Vegetable instance
        $imageFields = ['first_image', 'variety_image', 'soil_image', 'planting_image', 'care_image'];
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $filename = time() . '_' . $request->file($field)->getClientOriginalName();
                $request->file($field)->move(public_path('uploads/veg/'), $filename);
                $vegetable->{$field} = $filename;
            }
        }

        // Assign other fields to the Vegetable instance
        $vegetable->variety_description = json_encode($validatedData['variety_description']);
        $vegetable->soil_preparation = json_encode($validatedData['soil_preparation']);
        $vegetable->planting_techniques = json_encode($validatedData['planting_techniques']);
        $vegetable->watering_practices_dis = $validatedData['watering_practices_dis'];
        $vegetable->watering_practices = json_encode($validatedData['watering_practices']);
        $vegetable->fertilization_strategy_dis = $validatedData['fertilization_strategy_dis'];
        $vegetable->fertilization_strategy = json_encode($validatedData['fertilization_strategy']);
        $vegetable->weed_management_dis = $validatedData['weed_management_dis'];
        $vegetable->weed_management = json_encode($validatedData['weed_management']);
        $vegetable->managing_pests_and_diseases = $validatedData['managing_pests_and_diseases'];
        $vegetable->harvesting_discription = $validatedData['harvesting_discription'];
        $vegetable->harvesting_table = json_encode($validatedData['harvesting_table']);
        $vegetable->faqs = json_encode($validatedData['faqs']);
        $vegetable->common_mistakestoavoid = json_encode($validatedData['common_mistakestoavoid']);
        $vegetable->advanced_tips_for_maximizing_yield = json_encode($validatedData['advanced_tips_for_maximizing_yield']);

        // Save the Vegetable instance to the database
        $vegetable->save();

        // Redirect with success message
        return redirect('vegetablessss')->with('success', 'Vegetable created successfully!');
    }

//view more detail page in vegetable use id
    public function show($id)
    {
        $Vegetable = Vegetable::find($id);
        return view('vegetables.viewdetails', compact('Vegetable'));
    }
}

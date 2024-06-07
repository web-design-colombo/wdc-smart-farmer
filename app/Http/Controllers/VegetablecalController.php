<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vegetablecal;
use App\Models\Price;
use App\Models\Vegetable;
use Carbon\Carbon;
class VegetablecalController extends Controller
{
    public function index()
    {
        $vegetables = Vegetablecal::all();
        return view('index', compact('vegetables'));

    }

    public function calculate(Request $request)
    {
        $vegetable = Vegetable::find($request->vegetable_id);
        $area = $request->area;

        // Get today's price for the selected vegetable
        $price = Price::where('vegetable_id', $vegetable->id)
                      ->whereDate('date', Carbon::today())
                      ->first();

        if (!$price) {
            return redirect('/')
                ->with('error', 'Price information is not available for the selected vegetable today.')
                ->withInput();
        }

        // Calculate income and fertilizer needed
        $income = $area * $price->price_per_kg; // Assuming 1 sq meter yields 1 kg for simplicity
        $fertilizer = $area * $vegetable->fertilizer_per_sq_meter;

        $result = [
            'income' => $income,
            'fertilizer' => $fertilizer
        ];

        $vegetables = Vegetable::all();
        return view('index', compact('vegetables', 'result'));
    } 

    //vegedetails

    public function vegedetails($id)
    {
        $vegetable = Vegetablecal::find($id);
        $prices = Price::where('vegetable_id', $id)->get();
        return view('vegedetails', compact('vegetable', 'prices'));
    }

    //create
    public function create()
    {

        $vegetables = Vegetable::all();

        return view('admin.cal.create', compact('vegetables'));
    }
    //store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'days_to_harvest' => 'required|integer',
            'fertilizer_per_sq_meter' => 'required|numeric',
            'price_per_kg' => 'required|numeric',
            'date' => 'required|date',
        ]);

        // Create a new vegetable
        $vegetable = new Vegetablecal();
        $vegetable->name = $request->name;
        $vegetable->days_to_harvest = $request->days_to_harvest;
        $vegetable->fertilizer_per_sq_meter = $request->fertilizer_per_sq_meter;
        $vegetable->save();

        // Create a new price for the vegetable
        $price = new Price();
        $price->vegetable_id = $vegetable->id;
        $price->price_per_kg = $request->price_per_kg;
        $price->date = $request->date;
        $price->save();

        return redirect()->back()->with('success', 'Vegetable and price data saved successfully!');
   }
}

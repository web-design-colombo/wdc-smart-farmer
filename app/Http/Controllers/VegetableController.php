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




    //save all data in data base
    public function add(Request $request)
    {
        $Vegetable = new Vegetable();
$Vegetable->name = $request->name;

if($request->hasFile('image')){
    $file = $request->file('image');
    $extension = $file->getClientOriginalExtension();
    $filename = time() . '.' . $extension;
    $file->move('uploads/vegetables/', $filename);
    $Vegetable->imagehome = $filename;
}
$Vegetable->imageback = $request->imageback ?? ''; // Assign an empty string if imageback is empty
$Vegetable->botanicalname = $request->botanicalname ?? '';
$Vegetable->home_description = $request->home_description ?? '';
$Vegetable->looks_description = $request->looks_description ?? '';
$Vegetable->likes_description = $request->likes_description ?? '';
$Vegetable->dislike_description = $request->dislike_description ?? '';
$Vegetable->didyouknow_description = $request->didyouknow_description ?? '';
$Vegetable->howtogrow_description = $request->howtogrow_description ?? '';
$Vegetable->save();
return redirect('adminvegetable')->with('status', 'Vegetable added successfully');

    }

//view more detail page in vegetable use id
    public function show($id)
    {
        $Vegetable = Vegetable::find($id);
        return view('vegetables.viewdetails', compact('Vegetable'));
    }





}

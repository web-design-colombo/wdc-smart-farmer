<?php

namespace App\Http\Controllers;

use App\Models\Vegetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $Vegetable = new Vegetable();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/ss/', $filename);
            $Vegetable->image = $filename;
        }
        $Vegetable->name = $request->name;
        $Vegetable->heading = $request->heading;
        $Vegetable->heading_description = $request->heading_description;

        foreach ($request->faqs as $data) {
            $faq = [
                'name' => $data['question'],
                'management' => $data['answer'],
            ];

            if (isset($data['image'])) {
                $file = $data['image'];
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/aaa/', $filename);
                $faq['image_path'] = $filename; // Add image path to the FAQ data
            }

            $faqs[] = $faq;
        }

        $Vegetable->variety = json_encode($faqs);


        $Vegetable->climaticrequirements = $request->climaticrequirements;
        $Vegetable->areas = $request->areas;

        $Vegetable->soil = $request->soil;
        $Vegetable->Seed_requirement = $request->Seed_requirement;
        $Vegetable->Nursery_Management = $request->Nursery_Management;
        $Vegetable->Land_preparation = $request->Land_preparation;
        $Vegetable->Planting = $request->Planting;
        $Vegetable->Spacing = $request->Spacing;
        $Vegetable->Fertilizer = json_encode($request->fertilizers);

        $Vegetable->Water_supply = $request->Water_supply;
        $Vegetable->Weed_Control = $request->Weed_Control;

        $diseasesData = [];
        foreach ($request->diseases as $disease) {
            $diseaseData = [
                'name' => $disease['name'],
                'management' => $disease['management'],
            ];

            if (isset($disease['image'])) {
                $file = $disease['image'];
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/aaa/', $filename);
                $diseaseData['image_path'] = $filename; // Add image path to the disease data
            }

            $diseasesData[] = $diseaseData;
        }
        $Vegetable->Disease_Management = json_encode($diseasesData);



        $pestsData = [];
        foreach ($request->pests as $pestData) {
            $pest = [
                'name' => $pestData['question'],
                'management' => $pestData['answer'],
            ];

            if (isset($pestData['image'])) {
                $file = $pestData['image'];
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/aaa/', $filename);
                $pest['image_path'] = $filename; // Add image path to the pest data
            }

            $pestsData[] = $pest;
        }

        $Vegetable->Pest_Management = json_encode($pestsData);

        $Vegetable->Harvesting = $request->Harvesting;
        $Vegetable->Yield = $request->Yield;

        $Vegetable->save();
        return redirect()->back()->with('status', 'Saved successfully!');    }

//view more detail page in vegetable use id
    public function show($id)
    {
        $Vegetable = Vegetable::find($id);
        $Vegetables = Vegetable::all();

        return view('vegetables.viewdetails', compact('Vegetable', 'Vegetables'));
    }
}

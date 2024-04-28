<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;

class AdsController extends Controller
{
    public function store(Request $request)
    {
       //stor data in database}
         $ads = new Ads();
         if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/shopads/', $filename);
            $ads->image = $filename;
        }
            $ads->user_name = $request->user_name;
            $ads->user_nic = $request->user_nic;
            $ads->shop_name = $request->shop_name;
            $ads->shop_address = $request->shop_address;
            $ads->phone_number = $request->phone_number;
            $ads->vegetables = json_encode($request->vegetables);
            $ads->description = $request->description;
            $ads->city = $request->city;

            $ads->save();
            return view('buyersdashboard')->with('status', 'Your ad submission was successful! Please wait for 24 hours for administrative approval of your ad.');

    }

    // public function index()
    // {
    //     $ads = Ads::all();

    //     return view('admin.ads.new', compact('ads'));
    // }

    //show pendings status
    public function index()
    {
        $ads = Ads::where('status', '0')->get();
        return view('admin.ads.new', compact('ads'));
    }

    //viewadds by id
    public function view($id)
    {
        $ads = Ads::findOrFail($id);
    return view('admin.ads.old', compact('ads'));
    }


    public function update(Request $request, $id)
    {
        $ads = Ads::find($id);
        $ads->status = $request->input('status');
        $ads->update();
        // return redirect('index')->with('status', 'Ad Approve successfully');
        return redirect('newads')->with('status', 'Ad Approve successfully');

    }

    public function orderhistory()
    {
        $ads = Ads::where('status', '1')->get();
        return view('admin.ads.oldads', compact('ads'));
    }



// indexfrontend view
public function indexfrontend()
    {
        $ads = Ads::where('status', '1')->get();
        return view('ads.ads', compact('ads'));
    }


    public function viewmore($id)
    {
        $ads = Ads::findOrFail($id);
    return view('ads.view', compact('ads'));
    }




}


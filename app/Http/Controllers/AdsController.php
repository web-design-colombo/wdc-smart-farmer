<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Support\Str;

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
            return redirect()->back()->with('success', 'Your advertisement will be approved within 24 hours.');
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


    public function updatepro(Request $request, $id)
    {
        $ads = Product::find($id);
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
//vegesell
    public function vegesell()
    {
        $category = Category::all();

        return view('sellvege.index', compact('category'));
    }



    public function addfarmer(Request $request)
{
    $product = new Product();

    if($request->hasFile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/product/', $filename);
        $product->image = $filename;
    }

    $product->cate_id = $request->input('cate_id');
    $product->name = $request->input('name');
    $product->slug = $request->input('slug') ?? Str::slug($request->input('name'));
    $product->small_description = $request->input('small_description');
    $product->description = $request->input('description');
    $product->original_price = $request->input('original_price') ?? 0 ;
    $product->selling_price = $request->input('selling_price') ?? 0 ;
    $product->tax = $request->input('tax') ?? 0;

    // Check if 'qty' field is provided, otherwise set a default value
    $product->qty = $request->input('qty') ?? 0;

    $product->status = $request->input('status') == true ? 1 : 0;
    $product->trending = $request->input('trending') == true ? 1 : 0;
    $product->meta_title = $request->input('meta_title') ?? 0;
    $product->meta_description = $request->input('meta_description') ?? 0;
    $product->meta_keywords = $request->input('meta_keywords') ?? 0;
    $product->save();
    return redirect()->back()->with('success', 'Your Product will be approved within 24 hours.');

}



public function indexproduct()
{
    $ads = Product::where('status', '0')->get();
    return view('admin.farmers.new', compact('ads'));
}



public function viewmoresellpro($id)
{
    $ads = Product::findOrFail($id);
return view('admin.farmers.vieworder', compact('ads'));
}

public function sellhistory()
{
    $orders = Product::where('status', '1')->get();
    return view('admin.order.history', compact('orders'));
}

}


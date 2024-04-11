<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //index method
    public function index()
{
    $category = Category::all();
    $product = Product::all();
    return view('shop.shophome',  compact('product', 'category'));
}

    public function more($productSlug)
    {
        $product = Product::where('slug', $productSlug)->first();

        if ($product) {
            return view('shop.more', compact('product'));
        } else {
            abort(404); // Or handle the case where the product doesn't exist in a different way
        }
    }


//    viewcategory
public function viewCategory($slug)
{
    $category = Category::where('slug', $slug)->first();

    if ($category) {
        $product = Product::where('cate_id', $category->id)->where('status', '0')->get();
        return view('shop.shophome', compact('category', 'product'));
    } else {
        return redirect()->back();
    }
}

    public function viewAllProducts()
    {
        $products = Product::where('status', '0')->get();
        return view('shop.all-products', compact('products'));
    }


    //create productAjax
   // ShopController.php
public function productAjax(Request $request)
{
$res = Product::select("name")
->where("name","LIKE","%{$request->term}%")
->get();
return response()->json($res);


}

//searchproduct
public function searchproduct(Request $request)
{
    $search = $request->search;
    $product = Product::where('name', 'like', '%' . $search . '%')->get();
    return view('shop.shophome', compact('product'));
}

}

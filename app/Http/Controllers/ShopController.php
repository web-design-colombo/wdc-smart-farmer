<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    //index method
    public function index()
{


    // Status is 1 for active
    $trandin = Category::where('status', '1')->get();

    $category = Category::all();
    $product = Product::where('status', '1')->paginate(9);

    $rating_value = 0; // Default value

    if (!$product->isEmpty()) {
        $rating_value = Rating::where('prod_id', $product->first()->id)->avg('stars_rated');
    }

    return view('shop.shophome', compact('product', 'category', 'trandin', 'rating_value'));
}



    public function more($productSlug)
{
    $product = Product::where('slug', $productSlug)->first();
    $rating = Rating::where('prod_id', $product->id)->get();
    $rating_sum = Rating::where('prod_id', $product->id)->sum('stars_rated');
    $user_rating = Rating::where('prod_id', $product->id)->where('user_id', auth()->id())->first();
    $rating_count = $rating->count();

    if ($rating_count > 0) {
        $rating_value = $rating_sum / $rating_count;
    } else {
        $rating_value = 0; // Or any default value you want
    }

    if ($product) {
        return view('shop.more', compact('product', 'rating', 'rating_value','user_rating'));
    } else {
        abort(404); // Or handle the case where the product doesn't exist in a different way
    }
}



//    viewcategory
public function viewCategory($slug)
{
    if(Category::where('slug', $slug)->exists()){
        $category = Category::where('slug', $slug)->first();
        // $product = Product::where('cate_id', $category->id)->get();
        $product = Product::where('cate_id', $category->id)->paginate(6);

        return view('shop.shophome', compact('category', 'product'));
    }else{
        return redirect()->to('shop');

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
    $product = Product::where('name', 'like', '%' . $search . '%')->paginate(9);
    return view('shop.shophome', compact('product'));
}


//sort product
public function sortProduct(Request $request)
    {
        $sort = $request->sort;
        if ($sort == 'lowest_price') {
            $product = Product::orderBy('selling_price', 'asc')->paginate(9);
        } elseif ($sort == 'highest_price') {
            $product = Product::orderBy('selling_price', 'desc')->paginate(9);
        } elseif ($sort == 'best_selling') {
            $product = Product::orderBy('trending', 'desc')->paginate(9); // Assuming you have a sales column to sort by best selling
        } elseif ($sort == 'newest') {
            $product = Product::orderBy('created_at', 'asc')->paginate(9); // Assuming you have a sales column to sort by best selling
        } elseif ($sort == 'oldest') {
            $product = Product::orderBy('created_at', 'desc')->paginate(9); // Assuming you have a sales column to sort by best selling
        } else {
            $product = Product::paginate(9);
        }
        return view('shop.shophome', compact('product', 'sort'));
    }


}

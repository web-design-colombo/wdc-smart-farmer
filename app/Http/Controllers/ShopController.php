<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //index method
    public function index(){
        $category = Category::all();
        $product = Product::all();
        return view('shop.shophome', compact('product', 'category'));
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
    public function viewCategoryById($id)
    {
        $category = Category::all();
        $product = Product::all();
        $category = Category::find($id);

        if ($category) {
            $products = Product::where('cate_id', $id)->where('status', '0')->get();
            return view('shop.shophome', compact('category', 'products'));
        } else {
            return redirect()->route('shop.shophome')->with('error', 'Category not found');
        }
    }

    public function viewAllProducts()
    {
        $products = Product::where('status', '0')->get();
        return view('shop.all-products', compact('products'));
    }
}

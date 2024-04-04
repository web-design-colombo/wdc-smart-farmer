<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.product.create', compact('category'));

    }
    //show product function

     public function show()
     {
         //get all product data
            $product = Product::all();
            return view('admin.product.showproduct', compact('product'));

     }


    public function add(Request $request)
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
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->tax = $request->input('tax');

        // Check if 'qty' field is provided, otherwise set a default value
        $product->qty = $request->input('qty') ?? 0;

        $product->status = $request->input('status') == true ? 1 : 0;
        $product->trending = $request->input('trending') == true ? 1 : 0;
        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->save();

        return redirect('product')->with('status', 'Product added successfully');
    }

    public function delete()
    {
        return view('admin.product.delete');
    }
    public function edit()
    {
        return view('admin.product.edit');
    }
    public function update()
    {
        return view('admin.product.update');
    }
}

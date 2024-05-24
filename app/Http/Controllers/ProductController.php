<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
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

    public function delete($id)
    {


        $Product = Product::find($id);
        if (!$Product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $Product->delete();
        return redirect()->back()->with('status', 'Product deleted successfully.');

    }
    public function edit($id)
{
    $product = Product::findOrFail($id);
    $category = Category::all();
    return view('admin.product.editproduct', compact('product' , 'category'));
}
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id); // Retrieve a single model instance
        // Add debug statement
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }

        // Update other fields
        $product->cate_id = $request->input('cate_id') ?? 0;
        $product->name = $request->input('name');
        $product->slug = $request->input('slug') ?? Str::slug($request->input('name'));
        $product->small_description = $request->input('small_description') ?? 0;
        $product->description = $request->input('description') ?? 0;
        $product->original_price = $request->input('original_price') ?? 0;
        $product->selling_price = $request->input('selling_price') ?? 0;
        $product->tax = $request->input('tax') ?? 0;
        $product->qty = $request->input('qty') ?? 0;
        $product->status = $request->input('status') == true ? 1 : 0;
        $product->trending = $request->input('trending') == true ? 1 : 0;
        $product->meta_title = $request->input('meta_title') ?? 0;
        $product->meta_description = $request->input('meta_description') ?? 0;
        $product->meta_keywords = $request->input('meta_keywords') ?? 0;

        $product->save();

        return redirect('product')->with('status', 'Product updated successfully');
    }


//search
    public function search(Request $request)
    {
        $search = $request->get('search');
        $product = Product::where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('admin.product.showproduct', compact('product'));
    }

    public function productAjax(Request $request)
    {
    $res = Product::select("name")
    ->where("name","LIKE","%{$request->term}%")
    ->get();
    return response()->json($res);


    }

    public function searchcate(Request $request)
    {
        $search = $request->get('search');
        $product = Product::where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('admin.product.showproduct', compact('product'));
    }

    public function productAjaxx(Request $request)
    {
    $res = Product::select("name")
    ->where("name","LIKE","%{$request->term}%")
    ->get();
    return response()->json($res);


    }




}

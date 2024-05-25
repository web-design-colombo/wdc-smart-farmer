<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
//Method Illuminate\Routing\Redirector
use Illuminate\Routing\Redirector;
use App\Models\Product;
class CategoriController extends Controller
{
    //create index,add,delete,edit,update function
    public function index()
{
    $product = Product::all();

    $categories = Category::all();
    return view('admin.productcategory.create', compact('categories','product'));
}


    public function add(Request $request)
    {
            $category = new Category();
            $category->name = $request->input('name');
            $category->slug = $request->input('slug');
            $category->description = $request->input('description');
            $category->status = $request->input('status') == TRUE ? 1 : 0;
            $category->popular = $request->input('popular') == TRUE ? 1 : 0 ;
            $category->meta_title = $request->input('meta_title');
            $category->meta_description = $request->input('meta_description');
            $category->meta_keywords = $request->input('meta_keywords');
            $category->save();
            return redirect('category')->with('status', 'Category added successfully');

    }




    //delete category
    public function delete($id)
    {


        $category = Category::find($id);
        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        $category->delete();
        return redirect()->back()->with('status', 'Category deleted successfully.');

    }

   //update form
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.productcategory.edit', compact('category'));
    }

//update



        public function update(Request $request, $id)
        {
            $category = Category::find($id);
            if (!$category) {
                return redirect()->back()->with('error', 'Category not found.');
            }

            $category->name = $request->input('name');
            $category->slug = $request->input('slug');
            $category->description = $request->input('description');
            $category->status = $request->input('status', 0); // Default to 0 if not provided
            $category->popular = $request->input('popular', 0); // Default to 0 if not provided
            $category->meta_title = $request->input('meta_title');
            $category->meta_description = $request->input('meta_description');
            $category->meta_keywords = $request->input('meta_keywords');
            $category->update();

            return redirect()->back()->with('status', 'Category updated successfully.');


    }




    public function show()
    {
        $product = Product::all();

        $category = Category::all();
        return view('admin.productcategory.index', ['category' => $category] , ['product' => $product]);
    }
}

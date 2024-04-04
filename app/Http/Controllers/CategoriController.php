<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriController extends Controller
{
    //create index,add,delete,edit,update function
    public function index()
    {
        return view('admin.productcategory.create');
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




    public function delete()
    {
        return view('admin.category.delete');
    }

    public function edit()
    {
        return view('admin.category.edit');
    }

    public function update()
    {
        return view('admin.category.update');
    }

}

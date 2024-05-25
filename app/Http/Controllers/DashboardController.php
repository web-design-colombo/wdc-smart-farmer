<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;




class DashboardController extends Controller
{
    //view
    public function view()
    {
        //product
        $topProducts = Product::orderBy('sale', 'desc')->take(5)->get();
        // Pass the product to the view
        return view('admin.dashboard.index' , compact('topProducts'));
    }
}

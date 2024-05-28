<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
class HomeController extends Controller
{
    //roles

    public function index(){
        $user = Auth::user();
        $role=Auth::user()->role->value;

        if ($role == 1){
            // $user = User::find(1);
            $topProducts = Product::orderBy('sale', 'desc')->take(5)->get();
        // Pass the product to the view
        return view('admin.dashboard.index' , compact('topProducts'));
        }

        if ($role== 2){
            // $user = User::find(1);
            return view('welcome', compact('user'));
        }
        if ($role== 3){
            // $user = User::find(1);

            return view('welcome', compact('user'));
        }

        else {
            // $user = User::find(1);

            return view('welcome', compact('user'));
          }

    }


    public function indexnew()
    {
        // Fetch data from the model
        $users = User::all();

        // Pass the data to the view
        return view('layouts.site', compact('users'));
    }

}

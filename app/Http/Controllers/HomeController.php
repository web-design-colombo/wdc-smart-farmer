<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
class HomeController extends Controller
{
    //roles

    public function index(){
        $user = Auth::user();
        $role=Auth::user()->role->value;

        if ($role == 1){
            $productsCount = Product::count();
            // Count users
            $usersCount = User::count();
            // Count orders
            $ordersCount = Order::count();
            // Count categories

            $categoriesCount = Category::count();

            //only show  {{ $order->status == '0' ?'Pending' }} orders
            $pendingOrders = Order::where('status', '0')->get();
            $pendingOrdersCount = $pendingOrders->count();



            // Top 5 products by sale
            $topProducts = Product::orderBy('sale', 'desc')->take(5)->get();

            // Pass the data to the view
            return view('admin.dashboard.index', compact('topProducts', 'productsCount', 'usersCount', 'ordersCount', 'categoriesCount', 'pendingOrdersCount'));
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

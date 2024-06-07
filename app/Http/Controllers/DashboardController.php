<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Category;




class DashboardController extends Controller
{
    //view
    public function view()
    {
        // Count products
        $productsCount = Product::count();
        // Count users
        $usersCount = User::count();
        // Count orders
        $ordersCount = Order::count();
        // Count categories
        $categoriesCount = Category::count();

        //only show  {{ $order->status == '0' ?'Pending' }} orders
        $pendingOrders = Order::where('status', '0')->get();

        // Count the number of pending orders
        $pendingOrdersCount = $pendingOrders->count();


        // Top 5 products by sale
        $topProducts = Product::orderBy('sale', 'desc')->take(5)->get();

        // Pass the data to the view
        return view('admin.dashboard.index', compact('topProducts', 'productsCount', 'usersCount', 'ordersCount', 'categoriesCount', 'pendingOrdersCount'));
    }

}

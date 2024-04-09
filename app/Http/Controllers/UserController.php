<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model; // Move this line up to the correct position

class UserController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('shop.orders.index', compact('orders'));
    }

    public function viewOrder($id)
    {
        $orders = Order::where('id', $id)->where('user_id', Auth::id())->get();
        return view('shop.orders.view', compact('orders'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Confirmation extends Controller
{
    public function index()
    {
        //cart data
        $cartItem = Cart::where('user_id', Auth::id())->get();
        return view('shop.confirmation', compact('cartItem'));
    }
}
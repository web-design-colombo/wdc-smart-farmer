<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WishlistController extends Controller
{
    //show wishlist
    public function index()
    {
        $wishlist = Wishlist::where('user_id', Auth()->id())->get();
        return view('shop.wishlist', compact('wishlist'));
    }

    //add wishlist
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'prod_id' => 'required|integer', // Assuming prod_id is an integer
            'prod_qty' => 'required|integer|min:1', // Assuming prod_qty is an integer greater than 0
        ]);

        if ($validator->fails()) {
            // Return a JSON response with validation errors
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        // Ensure the user is authenticated before proceeding
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Create a new Wishlist instance and save it
        $wishlist = new Wishlist();
        $wishlist->prod_id = $request->prod_id;
        $wishlist->user_id = Auth::id();
        $wishlist->prod_qty = $request->prod_qty;
        $wishlist->save();

        // Return a JSON response indicating success
        return response()->json(['success' => 'Product added to wishlist']);
    }

}

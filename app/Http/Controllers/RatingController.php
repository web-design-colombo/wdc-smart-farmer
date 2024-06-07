<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use App\Models\Rating;

class RatingController extends Controller
{
    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'rating' => 'required|integer|min:0|max:5',
            'product_id' => 'required|exists:products,id',
            'review' => 'nullable|string',
            'name' => 'nullable|string',
        ]);

        $user_id = Auth::id();
        $stars_rated = $validatedData['rating'];
        $product_id = $validatedData['product_id'];

        $product = Product::find($product_id);

        if (!$product) {
            return back()->with('status', 'Product not found');
        }

        // Check if the user has purchased the product
        $verified_purchase = Order::where('user_id', $user_id)
            ->whereHas('items', function ($query) use ($product_id) {
                $query->where('prod_id', $product_id);
            })->exists();

        if (!$verified_purchase) {
            return redirect()->back()->with('fail', "You must purchase this product to rate it.");            // return redirect()->back()->with('fail', "You must purchase this product to rate it.");

    }
        $existing_rating = Rating::where('user_id', $user_id)
            ->where('prod_id', $product_id)
            ->first();

        if ($existing_rating) {
            $existing_rating->update([
                'stars_rated' => $stars_rated,
                'review' => $validatedData['review'],
                'name' => $validatedData['name'],
            ]);
        } else {
            Rating::create([
                'user_id' => $user_id,
                'prod_id' => $product_id,
                'stars_rated' => $stars_rated,
                'review' => $validatedData['review'],
                'name' => $validatedData['name'],
            ]);
        }

        return redirect()->back()->with('success', "Thank You For Rating This Product.");

    }

}

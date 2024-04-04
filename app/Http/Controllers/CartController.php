<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Cart;
use Auth;


class CartController extends Controller
{
    public function updateQuantity(Request $request, $id)
    {
        $cartItem = Cart::find($id);
        if (!$cartItem) {
            return redirect()->route('cart.index')->with('error', 'Cart item not found.');
        }

        $cartItem->prod_qty = $request->input('quantity');
        $cartItem->save();

        return redirect('cart')->with('success', 'Quantity updated successfully.');
    }
    public function delete($id)
    {
        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->back()->with('error', 'Item not found.');
        }

        $cartItem->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }
    //show cart
    public function show()
    {
        $product = Product::all();
        $cart = Cart::all();
        return view('shop.cart', compact('cart', 'product'));
    }

    public function addToCart(Request $request, $id)
    {
        if (Auth::check()) {
            // Check if the product is already in the cart
            $existingCartItem = Cart::where('user_id', Auth::id())
                ->where('prod_id', $id)
                ->first();

            if ($existingCartItem) {
                return redirect()->back()->with('fail', "Product is already in the cart");
            }

            // If the product is not in the cart, add it
            $product = Product::find($id); // Assuming you have a 'products' table
            if (!$product) {
                return redirect()->back()->with('error', "Product not found");
            }

            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->prod_id = $id;
            $cart->prod_qty = $request->quantity;
            $cart->prod_name = $product->name; // Set product name from the 'products' table
           //image
            $cart->prod_image = $product->image;

            $cart->prod_price = $product->selling_price; // Set product price from 'products' table

            $cart->save();

            return redirect()->back()->with('success', "Product added to cart successfully");
        } else {
            return redirect()->back()->with('error', "You must be logged in to add products to cart");
        }
    }




}

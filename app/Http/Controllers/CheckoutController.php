<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_Items;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class CheckoutController extends Controller
{
    public function index()
    {
        //cart data
        $cartItem = Cart::where('user_id', Auth::id())->get();
        return view('shop.checkout', compact('cartItem'));
    }
    //placeorder


    public function placeOrder(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'country' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'phone' => 'required|string',
            'zip_code' => 'required|string',
            'order_notes' => 'nullable|string',
        ]);

        // Calculate total price
        $cartItems = Cart::where('user_id', Auth::id())->get();
        $grandTotal = 0;
        foreach ($cartItems as $item) {
            $totalItemPrice = $item->prod_price * $item->prod_qty;
            $grandTotal += $totalItemPrice;
        }

        // Create the order with calculated total price
        $order = new Order();
        $order->user_id = Auth::id();
        $order->name = $request->name;
        $order->last_name = $request->last_name;
        $order->email = $request->email;
        $order->country = $request->country;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->province = $request->province;
        $order->phone = $request->phone;
        $order->zip_code = $request->zip_code;
        $order->order_notes = $request->order_notes;
        $order->status = 0;
        $order->tot = $grandTotal; // Assign the total price to the order

        $order->save();

        // Create order items and update product quantities
        foreach ($cartItems as $item) {
            Order_Items::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                'qty' => $item->prod_qty,
                'price' => optional($item->product)->selling_price ?? 0,
            ]);

            $product = Product::where('id', $item->prod_id)->first();
            $product->qty = $product->qty - $item->prod_qty;
            $product->save();
        }

        // Update user details if authenticated
        if (Auth::check()) {
            $user = Auth::user();
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->country = $request->country;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->province = $request->province;
            $user->phone = $request->phone;
            $user->zip_code = $request->zip_code;
            $user->save();
        }

        Cart::where('user_id', Auth::id())->delete();

        return redirect()->to('/checkout')->with('success', 'Order Placed Successfully');
    }


   //razorpaycheck
   public function razorpayCheck(Request $request)
{
    // Handle your logic here
    return view('dfgd');
}

}

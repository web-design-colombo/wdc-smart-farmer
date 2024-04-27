<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //index
    public function index()
    {
        $orders = Order::where('status', '0')->get();
        return view('admin.order.index', compact('orders'));
    }

    //view order
    public function viewOrder($id)
    {
        $order = Order::find($id);

    if (!$order) {
        // Handle case where order is not found, such as redirecting or showing an error message
        return redirect()->route('route_to_handle_not_found');
    }

    return view('admin.order.vieworder', compact('order'));
    }
// update
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->input('status');
        $order->update();
        return redirect('orders')->with('status', 'Order status updated successfully');
    }

    public function orderhistory()
    {
        $orders = Order::where('status', '1')->get();
        return view('admin.order.history', compact('orders'));
    }

}

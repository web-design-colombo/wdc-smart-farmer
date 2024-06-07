<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

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

    public function sellhistory()
    {
        $ads = Product::where('status', '1')->get();
        return view('admin.farmers.old', compact('ads'));
    }


    public function orderhistory()
    {
        $ads = Order::where('status', '1')->get();
        return view('admin.order.history', compact('ads'));
    }

    public function sortorders(Request $request)
    {
        // Define the available sorting options
        $sortOptions = [
            'Newest' => ['created_at', 'desc'],
            'Oldest' => ['created_at', 'asc'],
            'Highest Price Orders' => ['tot', 'desc'],
            'Lowest Price Orders' => ['tot', 'asc'],
        ];

        // Get the sort parameter from the request
        $sort = $request->input('sort');

        // Determine the sorting option
        $sortColumn = 'created_at'; // Default column
        $sortDirection = 'desc'; // Default direction

        if (array_key_exists($sort, $sortOptions)) {
            [$sortColumn, $sortDirection] = $sortOptions[$sort];
        }

        // Fetch the orders with the determined sorting
        $orders = Order::orderBy($sortColumn, $sortDirection)->get();

        // Return the view with the sorted orders
        return view('admin.order.index', compact('orders'));
    }



    //stripe
    public function stripe($id, $total)
    {
        // Use the order ID and total to process the payment
        // For now, we're just passing these values to the view
        return view('test', ['orderId' => $id, 'orderTotal' => $total]);
    }
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        $orders = Order::where('user_id', Auth::id())->get();
        return view('shop.orders.index', compact('orders'));
    }
}

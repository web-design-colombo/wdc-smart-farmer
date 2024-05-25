<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model; // Move this line up to the correct position
use Illuminate\Support\Facades\Hash; // Move this line up to the correct position

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


    //users
    public function users()
    {
        $users = User::all();
        return view('admin.user.all', compact('users'));
    }

    //deleteUser
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('status', 'User Deleted successfully.');

    }
    //updateUser view
    public function updateUser($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    //profileupdate
    public function profileUpdate(Request $request)
{
    $user = Auth::user();

    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'phone' => 'nullable|string|max:15',
        'address' => 'nullable|string|max:255',
    ]);

    // Update the user data
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone ?? '';
    $user->address = $request->address ?? '';
    $user->save();

    return redirect()->back()->with('status', 'Profile updated successfully.');
}
//adduser
public function create()
    {
        //all user
        $user = User::all();
        return view('admin.user.create', compact('user'));
    }
    //store
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'role' => 'required|integer',
            'profile_picture' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048', // Ensure file validation
        ]);

        // Handle file upload
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('profile_pictures', $fileName, 'public');
        } else {
            $filePath = null;
        }

        // Create the user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone ?? '';
        $user->address = $request->address ?? '';
        $user->city = $request->city ?? '';
        $user->role = $request->role;
        $user->profile_picture = $filePath;
        $user->save();

        return redirect()->back()->with('status', 'User created successfully.');
    }


}

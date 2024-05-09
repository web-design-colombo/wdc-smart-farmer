<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookedSlots = Booking::pluck('time')->toArray();
        return view('booking.booking', compact('bookedSlots'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'required',
        ]);

        // Check if the selected time slot is already booked
        if (Booking::where('date', $request->date)->where('time', $request->time)->exists()) {
            return redirect()->back()->withErrors(['time' => 'This time slot is already booked. Please choose a different time.'])->withInput();
        }

        $booking = new Booking();
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->message = $request->message;
        $booking->user_id = auth()->id();
        $booking->save();

        return redirect('appointment')->with('success', 'Booking has been submitted successfully');
    }

    //show
    public function show()
    {
        $bookings = Booking::all();
        return view('booking.show', compact('bookings'));
    }
    //editbooks
    public function edit($id)
    {
        $bookedSlots = Booking::find($id);
        return view('booking.edit', compact('bookedSlots'));
    }
    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'required',
        ]);

        $booking = Booking::find($id);
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->message = $request->message;
        $booking->save();

        //send email


        return redirect('appointment')->with('success', 'Booking has been updated successfully');
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect('appointment')->with('success', 'Booking has been deleted successfully');
    }
}

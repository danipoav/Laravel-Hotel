<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $room)
    {
        $request->validate([
            'checkIn' => 'required|date',
            'checkOut' => 'required|date',
            'price' => 'required|numeric|min:0'
        ]);

        $in = Carbon::parse($request->checkIn);
        $out = Carbon::parse($request->checkOut);
        $diff = $in->diffInDays($out);
        $price = $request->price * $diff;


        Booking::create([
            'name' => 'Daniel',
            'photo' => 'https://thispersondoesnotexist.com/',
            'check_in' => $request->checkIn,
            'check_out' => $request->checkOut,
            'room' => $room,
            'requests' => 'Doloremque qui voluptas eaque voluptates repellendus aut ut. Eaque dolore reiciendis quam. Consequatur animi culpa quam ut enim. Dolorem omnis occaecati porro aut blanditiis nihil quasi.',
            'booking_date' => today(),
            'price' => $price,
            'status' => 'Pending'
        ]);

        return redirect()->route('rooms')->with('success', 'Room Booked correctly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function check(Request $request, int $roomNumber)
    {
        $checkIn = $request->input('checkIn');
        $checkOut = $request->input('checkOut');

        $isBooked = Booking::where('room', $roomNumber)
            ->where(function ($query) use ($checkIn, $checkOut) {
                $query->whereBetween('check_in', [$checkIn, $checkOut])
                    ->orWhereBetween('check_out', [$checkIn, $checkOut])
                    ->orWhere(function ($q) use ($checkIn, $checkOut) {
                        $q->where('check_in', '<=', $checkIn)
                            ->where('check_out', '>=', $checkOut);
                    });
            })
            ->exists();

        return redirect()->back()->with('available', !$isBooked)->with('checkIn', $checkIn)->with('checkOut', $checkOut);
    }
}

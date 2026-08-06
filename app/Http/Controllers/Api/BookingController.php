<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['customer', 'vehicle', 'service'])->latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Bookings retrieved successfully.',
            'data' => $bookings,
        ]);
    }

    public function store(StoreBookingRequest $request)
    {
        $booking = Booking::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Booking created successfully.',
            'data' => $booking,
        ], 201);
    }

    public function show(string $id)
    {
        $booking = Booking::with(['customer', 'vehicle', 'service'])->find($id);

        if (!$booking) {
            return response()->json([
                'success' => false,
                'message' => 'Booking not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Booking retrieved successfully.',
            'data' => $booking,
        ]);
    }

    public function update(UpdateBookingRequest $request, string $id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response()->json([
                'success' => false,
                'message' => 'Booking not found.'
            ], 404);
        }

        $booking->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Booking updated successfully.',
            'data' => $booking,
        ]);
    }

    public function destroy(string $id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response()->json([
                'success' => false,
                'message' => 'Booking not found.'
            ], 404);
        }

        $booking->delete();

        return response()->json([
            'success' => true,
            'message' => 'Booking deleted successfully.'
        ]);
    }
}
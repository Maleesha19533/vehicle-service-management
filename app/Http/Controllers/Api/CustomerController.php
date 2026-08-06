<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $customers = Customer::latest()->get();

    return response()->json([
        'success' => true,
        'message' => 'Customers retrieved successfully.',
        'data' => $customers,
    ], 200);
}

    /**
     * Store a newly created resource in storage.
     */
   public function store(StoreCustomerRequest $request)
{
    $customer = Customer::create($request->validated());

    return response()->json([
        'success' => true,
        'message' => 'Customer created successfully.',
        'data' => $customer,
    ], 201);
}

    /**
     * Display the specified resource.
     */
   public function show(string $id)
{
    $customer = Customer::with('vehicles')->find($id);

    if (!$customer) {
        return response()->json([
            'success' => false,
            'message' => 'Customer not found.'
        ], 404);
    }

    return response()->json([
        'success' => true,
        'message' => 'Customer retrieved successfully.',
        'data'    => $customer
    ], 200);
}
    /**
     * Update the specified resource in storage.
     */
   public function update(UpdateCustomerRequest $request, string $id)
{
    $customer = Customer::find($id);

    if (!$customer) {
        return response()->json([
            'success' => false,
            'message' => 'Customer not found.'
        ], 404);
    }

    $customer->update($request->validated());

    return response()->json([
        'success' => true,
        'message' => 'Customer updated successfully.',
        'data' => $customer,
    ], 200);
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
{
    $customer = Customer::find($id);

    if (!$customer) {
        return response()->json([
            'success' => false,
            'message' => 'Customer not found.'
        ], 404);
    }

    $customer->delete();

    return response()->json([
        'success' => true,
        'message' => 'Customer deleted successfully.'
    ], 200);
}

}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Http\Requests\StoreServiceRequestRequest;
use App\Http\Requests\UpdateServiceRequestRequest;
use App\Http\Requests\StoreServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();

        return response()->json([
            'success' => true,
            'message' => 'Services retrieved successfully.',
            'data' => $services
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
{
    $service = Service::create($request->validated());

    return response()->json([
        'success' => true,
        'message' => 'Service created successfully.',
        'data'    => $service
    ], 201);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::find($id);

        if (!$service) {
            return response()->json([
                'success' => false,
                'message' => 'Service not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Service retrieved successfully.',
            'data' => $service
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequestRequest $request, string $id)
    {
        $service = Service::find($id);

        if (!$service) {
            return response()->json([
                'success' => false,
                'message' => 'Service not found.'
            ], 404);
        }

        $service->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Service updated successfully.',
            'data' => $service
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);

        if (!$service) {
            return response()->json([
                'success' => false,
                'message' => 'Service not found.'
            ], 404);
        }

        $service->delete();

        return response()->json([
            'success' => true,
            'message' => 'Service deleted successfully.'
        ], 200);
    }
}
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ServiceRequest;
use App\Http\Requests\StoreServiceRequestRequest;
use App\Http\Requests\UpdateServiceRequestRequest;

class ServiceRequestController extends Controller
{
    public function index()
    {
        $services = ServiceRequest::with('vehicle')->latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Service requests retrieved successfully.',
            'data' => $services,
        ], 200);
    }

    public function store(StoreServiceRequestRequest $request)
    {
        $service = ServiceRequest::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Service request created successfully.',
            'data' => $service,
        ], 201);
    }

    public function show(string $id)
    {
        $service = ServiceRequest::with('vehicle')->find($id);

        if (!$service) {
            return response()->json([
                'success' => false,
                'message' => 'Service request not found.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Service request retrieved successfully.',
            'data' => $service,
        ], 200);
    }

    public function update(UpdateServiceRequestRequest $request, string $id)
    {
        $service = ServiceRequest::find($id);

        if (!$service) {
            return response()->json([
                'success' => false,
                'message' => 'Service request not found.',
            ], 404);
        }

        $service->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Service request updated successfully.',
            'data' => $service,
        ], 200);
    }

    public function destroy(string $id)
    {
        $service = ServiceRequest::find($id);

        if (!$service) {
            return response()->json([
                'success' => false,
                'message' => 'Service request not found.',
            ], 404);
        }

        $service->delete();

        return response()->json([
            'success' => true,
            'message' => 'Service request deleted successfully.',
        ], 200);
    }
}
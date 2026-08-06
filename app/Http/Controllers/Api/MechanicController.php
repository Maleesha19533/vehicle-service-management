<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;
use App\Http\Requests\StoreMechanicRequest;
use App\Http\Requests\UpdateMechanicRequest;

class MechanicController extends Controller
{
    public function index()
    {
        $mechanics = Mechanic::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Mechanics retrieved successfully.',
            'data' => $mechanics,
        ], 200);
    }

    public function store(StoreMechanicRequest $request)
    {
        $mechanic = Mechanic::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Mechanic created successfully.',
            'data' => $mechanic,
        ], 201);
    }

    public function show(string $id)
    {
        $mechanic = Mechanic::find($id);

        if (!$mechanic) {
            return response()->json([
                'success' => false,
                'message' => 'Mechanic not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Mechanic retrieved successfully.',
            'data' => $mechanic,
        ], 200);
    }

    public function update(UpdateMechanicRequest $request, string $id)
    {
        $mechanic = Mechanic::find($id);

        if (!$mechanic) {
            return response()->json([
                'success' => false,
                'message' => 'Mechanic not found.'
            ], 404);
        }

        $mechanic->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Mechanic updated successfully.',
            'data' => $mechanic,
        ], 200);
    }

    public function destroy(string $id)
    {
        $mechanic = Mechanic::find($id);

        if (!$mechanic) {
            return response()->json([
                'success' => false,
                'message' => 'Mechanic not found.'
            ], 404);
        }

        $mechanic->delete();

        return response()->json([
            'success' => true,
            'message' => 'Mechanic deleted successfully.',
        ], 200);
    }
}
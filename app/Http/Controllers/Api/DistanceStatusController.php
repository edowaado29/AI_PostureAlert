<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DistanceStatus;
use Illuminate\Http\Request;

class DistanceStatusController extends Controller
{
    // Mendapatkan semua data distance status
    public function index()
    {
        $distances = DistanceStatus::all();
        return response()->json($distances);
    }

    // Menyimpan data baru untuk distance status
    public function store(Request $request)
    {
        $request->validate([
            'distance' => 'required|numeric',
            'status' => 'required|string|max:50',
        ]);

        $distanceStatus = DistanceStatus::create([
            'distance' => $request->distance,
            'status' => $request->status,
            'timestamp' => now(),
        ]);

        return response()->json($distanceStatus, 201);
    }

    // Mendapatkan data distance status berdasarkan ID
    public function show($id)
    {
        $distanceStatus = DistanceStatus::find($id);

        if (!$distanceStatus) {
            return response()->json(['message' => 'Distance status not found'], 404);
        }

        return response()->json($distanceStatus);
    }

    // Menghapus data distance status
    public function destroy($id)
    {
        $distanceStatus = DistanceStatus::find($id);

        if (!$distanceStatus) {
            return response()->json(['message' => 'Distance status not found'], 404);
        }

        $distanceStatus->delete();
        return response()->json(['message' => 'Distance status deleted successfully']);
    }
}

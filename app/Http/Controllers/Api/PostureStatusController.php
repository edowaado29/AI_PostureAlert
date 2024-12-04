<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PostureStatus;
use Illuminate\Http\Request;

class PostureStatusController extends Controller
{
    // Mendapatkan semua data posture status
    public function index()
    {
        $statuses = PostureStatus::all();
        return response()->json($statuses);
    }

    // Menyimpan data baru untuk posture status
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $postureStatus = PostureStatus::create([
            'status' => $request->status,
            'timestamp' => now(),
        ]);

        return response()->json($postureStatus, 201);
    }

    // Mendapatkan data posture status berdasarkan ID
    public function show($id)
    {
        $postureStatus = PostureStatus::find($id);

        if (!$postureStatus) {
            return response()->json(['message' => 'Status not found'], 404);
        }

        return response()->json($postureStatus);
    }

    // Menghapus data posture status
    public function destroy($id)
    {
        $postureStatus = PostureStatus::find($id);

        if (!$postureStatus) {
            return response()->json(['message' => 'Status not found'], 404);
        }

        $postureStatus->delete();
        return response()->json(['message' => 'Status deleted successfully']);
    }
}

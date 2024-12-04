<?php

namespace App\Http\Controllers\Api;

use App\Models\PostureImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostureImageController extends Controller
{
    public function index()
    {
        $images = PostureImage::all();
        return response()->json($images);
    }

    // Menyimpan data baru untuk posture image
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|longText',
        ]);

        $postureImage = PostureImage::create([
            'image' => $request->image,
            'timestamp' => now(),
        ]);

        return response()->json($postureImage, 201);
    }

    // Mendapatkan data posture image berdasarkan ID
    public function show($id)
    {
        $postureImage = PostureImage::find($id);

        if (!$postureImage) {
            return response()->json(['message' => 'Image not found'], 404);
        }

        return response()->json($postureImage);
    }

    // Menghapus data posture image
    public function destroy($id)
    {
        $postureImage = PostureImage::find($id);

        if (!$postureImage) {
            return response()->json(['message' => 'Image not found'], 404);
        }

        $postureImage->delete();
        return response()->json(['message' => 'Image deleted successfully']);
    }
}

<?php

namespace App\Services;

use App\Models\Painting;

class PaintingService
{
    public static function createPaintingService($request): void
    {
        $fileName = time().'.'.$request->image->extension();

        $request->image->move(public_path('storage'), $fileName);

        Painting::create([
            'title' => $request->title,
            'size' => $request->size,
            'medium' => $request->medium,
            'location' => $request->location,
            'frame_status' => $request->frame_status,
            'status' => $request->status,
            'notes' => $request->notes,
            'category' => $request->category,
            'image' => $fileName
        ]);
    }
}

<?php

namespace App\Services;

use App\Models\Painting;
use Illuminate\Support\Facades\Storage;


/**
 *The Painting Service provides the logic for the Painting Controller
 */
class PaintingService
{

    /**
     * @param $request
     *
     * @return void
     */
    public static function createPaintingService($request): void
    {
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();

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

    /**
     * @param $id
     * @return void
     */
    public static function deletePaintingService($id): void
    {
        $painting = Painting::findOrFail($id);

        if (Storage::exists('/public/' . $painting->image)) {
            Storage::delete('/public/' . $painting->image);
        }

        $painting->delete();

    }

    public static function changeAvailability($id, $response): void
    {
        $painting = Painting::findOrFail($id);

        $painting->status = $response;

        $painting->save();
    }
}

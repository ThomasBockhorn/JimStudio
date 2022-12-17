<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaintingRequest;
use App\Models\Painting;
use App\Services\PaintingService;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

/**
 * Class PaintingController
 * @package App\Http\Controllers
 */
class PaintingController extends Controller
{

    /**
     * Return to the main gallery.
     *
     * @return Response
     */
    private function returningToGallery(): Response
    {
        $paintings = Painting::all();

        return Inertia::render('Paintings/index', compact('paintings'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $paintings = Painting::all();

        return Inertia::render('Paintings/index', compact('paintings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        return Inertia::render('Paintings/create');
    }


    /**
     * This method will update the availability or unavailability of a painting
     *
     * @param Request $request
     *
     * @return void
     */
    public function changeStatus(PaintingRequest $request): void
    {
        $painting = Painting::findOrFail($request->id);

        $painting->status = $request->status;

        $painting->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(PaintingRequest $request): Response
    {
        PaintingService::createPaintingService($request);

        //This will return to the main gallery
        return self::returningToGallery();
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function show($id): Response
    {
        return Inertia::render('Paintings/show', ['painting' => Painting::findOrFail($id)]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id): Response
    {
        PaintingService::deletePaintingService($id);

        //This will return to the main gallery
        return self::returningToGallery();
    }


}

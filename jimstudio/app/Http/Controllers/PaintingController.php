<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PaintingController extends Controller
{
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
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request): Response
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

        $paintings = Painting::all();

        return Inertia::render('Paintings/index', compact('paintings'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function show(Painting $painting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function edit(Painting $painting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Painting $painting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Painting $painting)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use App\Services\PaintingService;
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
        PaintingService::createPaintingService($request);

        $paintings = Painting::all();

        return Inertia::render('Paintings/index', compact('paintings'));
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
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function edit($id): Response
    {
        return Inertia::render('Paintings/edit', ['painting' => Painting::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Painting $painting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Painting $painting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Painting $painting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Painting $painting)
    {
        //
    }
}

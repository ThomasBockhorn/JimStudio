<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

/**
 * Class PaintingController
 * @package App\Http\Controllers
 */
class CategorySearchController extends Controller
{

    /**
     * CategorySearch will search for a particular category
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request): Response
    {
        //This will search for a particular category
        return Inertia::render('Category/index', ['selectedPaintings' => DB::table('paintings')
            ->where('category', 'LIKE', '%' . $request->category . '%')
            ->get(),
            'paintings' => Painting::all()]);
    }
}

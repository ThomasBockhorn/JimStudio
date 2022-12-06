<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

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
        return Inertia::render('Category/index', ['paintings' => DB::table('paintings')
            ->where('category', 'LIKE', '%' . $request->category . '%')
            ->get()]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return response()->json($this->filterFlowers($request));
        }

        return view('catalogo');
    }

    public function show($id)
    {
        $flower = Flower::findOrFail($id); // Recupera il fiore dal database
        return view('flowers.show', compact('flower')); // Passa i dati alla vista
    }

    private function filterFlowers($request)
    {
        $query = Flower::query();

        if ($request->color) {
            $query->where('color', $request->color);
        }
        if ($request->season) {
            $query->where('season', $request->season);
        }
        if ($request->type) {
            $query->where('type', $request->type);
        }

        return $query->paginate(12);
    }

}

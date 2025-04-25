<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function create()
    {
        return view('flowers.create'); 
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'season' => 'required',
            'type' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images/catalogo'), $imageName);

        // Salva il percorso corretto per visualizzare l'immagine
        $data['image'] = 'images/catalogo/' . $imageName;

        Flower::create($data);
        return redirect('/flowers')->with('success', 'Fiore aggiunto!');
    }

    public function edit($id)
    {
        $flower = Flower::findOrFail($id);
        return view('flowers.edit', compact('flower'));
    }

    public function update(Request $request, $id)
    {
        $flower = Flower::findOrFail($id);
        $data = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'season' => 'required',
            'type' => 'required',
        ]);        

        $flower->update($data);
        return redirect('/catalogo')->with('success', 'Fiore aggiornato!');
    }

    public function destroy($id)
    {
        $flower = Flower::findOrFail($id);
        Storage::delete('public/' . $flower->image);
        $flower->delete();
        return redirect('/catalogo')->with('success', 'Fiore eliminato!');
    }

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
        $query = Flower::query()->orderBy('created_at', 'desc');

        if ($request->color) {
            $query->where('color', $request->color);
        }
        if ($request->season) {
            $query->where('season', $request->season);
        }
        if ($request->type) {
            $query->where('type', $request->type);
        }
        if ($request->description) {
            $query->where('description', $request->description);
        }
        if ($request->care_sun) {
            $query->where('care_sun', $request->care_sun);
        }
        if ($request->care_water) {
            $query->where('care_water', $request->care_water);
        }
        if ($request->care_soil) {
            $query->where('care_soil', $request->care_soil);
        }
        return $query->paginate(12);
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    //form per creare un nuovo fiore
    public function create()
    {
        return view('flowers.create'); 
    }
    //salva un nuovo fiore nel database
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'season' => 'required',
            'type' => 'required',
            'image' => 'required|image|max:2048',
        ]);
        //gestione upload immagine
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images/catalogo'), $imageName);
        //salva il percorso relativo per l'immagine
        $data['image'] = 'images/catalogo/' . $imageName;

        //crea il nuovo record nel database
        Flower::create($data);
        return redirect('/flowers')->with('success', 'Fiore aggiunto!');
    }

    //form per modificare un fiore esistente
    public function edit($id)
    {
        $flower = Flower::findOrFail($id);
        return view('flowers.edit', compact('flower'));
    }

    //aggiorna un fiore esistente nel database
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

    //elimina un fiore dal database
    public function destroy($id)
    {
        $flower = Flower::findOrFail($id);
        Storage::delete('public/' . $flower->image);
        $flower->delete();
        return redirect('/catalogo')->with('success', 'Fiore eliminato!');
    }

    //mostra il catalogo fiori
    public function index(Request $request)
    {
        //se la richiesta è AJAX, restituisci JSON con i fiori filtrati
        if ($request->ajax()) {
            return response()->json($this->filterFlowers($request));
        }

        return view('catalogo'); 
    }
    
    
    //mostra i dettagli di un singolo fiore
    public function show($id)
    {
        //recupera il fiore dal database
        $flower = Flower::findOrFail($id); 
        return view('flowers.show', compact('flower')); //passa i dati alla vista
    }

    //filtra i fiori in base ai parametri della richiesta
    private function filterFlowers($request)
    {
        $query = Flower::query()->orderBy('created_at', 'desc');
        // Applica i filtri se presenti nella richiesta
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
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
        // Restituisce i risultati paginati
        return $query->paginate(12);
    }    
}

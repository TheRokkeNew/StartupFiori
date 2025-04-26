<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    //Mostra il form per creare un nuovo fiore
    public function create()
    {
        return view('flowers.create'); 
    }
    //Salva un nuovo fiore nel database
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'season' => 'required',
            'type' => 'required',
            'image' => 'required|image|max:2048',
        ]);
        // Gestione upload immagine
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images/catalogo'), $imageName);

        // Salva il percorso relativo per l'immagine
        $data['image'] = 'images/catalogo/' . $imageName;

        //Crea il nuovo record nel database
        Flower::create($data);
        return redirect('/flowers')->with('success', 'Fiore aggiunto!');
    }

    //Mostra il form per modificare un fiore esistente
    public function edit($id)
    {
        $flower = Flower::findOrFail($id);
        return view('flowers.edit', compact('flower'));
    }

    //Aggiorna un fiore esistente nel database
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

    //Elimina un fiore dal database
    public function destroy($id)
    {
        $flower = Flower::findOrFail($id);
        Storage::delete('public/' . $flower->image);
        $flower->delete();
        return redirect('/catalogo')->with('success', 'Fiore eliminato!');
    }

    //Mostra il catalogo fiori (con supporto AJAX per filtri)
    public function index(Request $request)
    {
        // Se la richiesta è AJAX, restituisci JSON con i fiori filtrati
        if ($request->ajax()) {
            return response()->json($this->filterFlowers($request));
        }

        return view('catalogo'); 
    }
    
    //Mostra i dettagli di un singolo fiore
    public function show($id)
    {
        $flower = Flower::findOrFail($id); // Recupera il fiore dal database
        return view('flowers.show', compact('flower')); // Passa i dati alla vista
    }

    //Filtra i fiori in base ai parametri della richiesta
    private function filterFlowers($request)
    {
        // Query base ordinata per data di creazione (dal più recente)
        $query = Flower::query()->orderBy('created_at', 'desc');

        // Applica i filtri se presenti nella richiesta
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

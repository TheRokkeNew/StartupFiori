<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OccasionController extends Controller
{    
    //Mostra la vista corrispondente a un'occasione specifica
    public function show($tipo)
    {
        // Lista delle occasioni
        $occasioni = ['matrimonio', 'funerale', 'battesimo', 'san_valentino', 'festa_della_donna'];

        // Verifica se l'occasione richiesta esiste
        if (!in_array($tipo, $occasioni)) {
            abort(404); // Se l'occasione non esiste, mostra una pagina 404
        }

        return view("occasione.$tipo"); // Carica la vista specifica
    }
}

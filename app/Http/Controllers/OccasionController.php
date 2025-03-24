<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OccasionController extends Controller
{    
    public function show($tipo)
    {
        $occasioni = ['matrimonio', 'funerale', 'battesimo', 'san_valentino'];

        if (!in_array($tipo, $occasioni)) {
            abort(404); // Se l'occasione non esiste, mostra una pagina 404
        }

        return view("occasione.$tipo"); // Carica la vista specifica
    }
}

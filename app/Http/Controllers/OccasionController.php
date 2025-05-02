<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OccasionController extends Controller
{    
    //mostra la vista corrispondente a un'occasione specifica
    public function show($tipo)
    {
        $occasioni = ['matrimonio', 'funerale', 'battesimo', 'san_valentino', 'festa_della_donna'];
        //verifica se l'occasione richiesta esiste, se non esiste mostra una pagina 404
        if (!in_array($tipo, $occasioni)) {
            abort(404); 
        }
        //carica la vista specifica
        return view("occasione.$tipo");
    }
}

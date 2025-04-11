<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotaturaController extends Controller
{
    public function index()
    {
        $piante = [
            [
                'nome' => 'Abete',
                'immagine' => 'abete.png',
                'potatura' => [2, 3],
            ],
            [
                'nome' => 'Acacia',
                'immagine' => 'acacia.png',
                'potatura' => [11, 3],
            ],
            [
                'nome' => 'Agrifoglio',
                'immagine' => 'agrifoglio.png',
                'potatura' => [2, 3],
            ],
            [
                'nome' => 'Alloro',
                'immagine' => 'alloro.png',
                'potatura' => [3, 6],
            ],            
            [
                'nome' => 'Biancospino',
                'immagine' => 'biancospino.png',
                'potatura' => [2, 3, 6],
            ],
            [
                'nome' => 'Betulla',
                'immagine' => 'betulla.png',
                'potatura' => [7, 8],
            ],
            [
                'nome' => 'Buxus',
                'immagine' => 'buxus.png',
                'potatura' => [5, 6, 9],
            ],
            [
                'nome' => 'Cachi',
                'immagine' => 'cachi.png',
                'potatura' => [2, 3],
            ],
            [
                'nome' => 'Camelia',
                'immagine' => 'camelia.png',
                'potatura' => [4, 5],
            ],
            [
                'nome' => 'Castagno',
                'immagine' => 'castagno.png',
                'potatura' => [11, 12, 1, 2],
            ],
            [
                'nome' => 'Ciliegio',
                'immagine' => 'ciliegio.png',
                'potatura' => [7, 8],
            ],
            [
                'nome' => 'Cipresso',
                'immagine' => 'cipresso.png',
                'potatura' => [3, 4],
            ],
            [
                'nome' => 'Citrus',
                'immagine' => 'citrus.png',
                'potatura' => [3, 4],
            ],            
            [
                'nome' => 'Edera',
                'immagine' => 'edera.png',
                'potatura' => [3, 10],
            ],
            [
                'nome' => 'Eucalipto',
                'immagine' => 'eucalipto.png',
                'potatura' => [3, 4],
            ],
            [
                'nome' => 'Faggio',
                'immagine' => 'faggio.png',
                'potatura' => [3, 10],
            ],
            [
                'nome' => 'Fico',
                'immagine' => 'fico.png',
                'potatura' => [2, 3],
            ],
            [
                'nome' => 'Frassino',
                'immagine' => 'frassino.png',
                'potatura' => [11, 12, 1, 2],
            ],
            [
                'nome' => 'Forsizia',
                'immagine' => 'forsizia.png',
                'potatura' => [4, 5],
            ],
            [
                'nome' => 'Gelsomino',
                'immagine' => 'gelsomino.png',
                'potatura' => [6, 7],
            ],
            [
                'nome' => 'Ginkgo',
                'immagine' => 'ginkgo.png',
                'potatura' => [2, 3],
            ],
            [
                'nome' => 'Glicine',
                'immagine' => 'glicine.png',
                'potatura' => [7, 8, 1, 2],
            ],
            [
                'nome' => 'Hibiscus',
                'immagine' => 'hibiscus.png',
                'potatura' => [3, 4],
            ],
            [
                'nome' => 'Ippocastano',
                'immagine' => 'ippocastano.png',
                'potatura' => [11, 12, 1],
            ],
            [
                'nome' => 'Lauroceraso',
                'immagine' => 'lauroceraso.png',
                'potatura' => [3, 6],
            ],
            [
                'nome' => 'Lillà',
                'immagine' => 'lilla.png',
                'potatura' => [5, 6],
            ],
            [
                'nome' => 'Lime',
                'immagine' => 'lime.png',
                'potatura' => [3, 4],
            ],
            [
                'nome' => 'Magnolia',
                'immagine' => 'magnolia.png',
                'potatura' => [5, 6],
            ],
            [
                'nome' => 'Melograno',
                'immagine' => 'melograno.png',
                'potatura' => [2, 3],
            ],
            [
                'nome' => 'Melo',
                'immagine' => 'melo.png',
                'potatura' => [1, 2, 7],
            ],
            [
                'nome' => 'Mimosa',
                'immagine' => 'mimosa.png',
                'potatura' => [4, 5],
            ],
            [
                'nome' => 'Nespolo',
                'immagine' => 'nespolo.png',
                'potatura' => [2, 3],
            ],
            [
                'nome' => 'Nocciolo',
                'immagine' => 'nocciolo.png',
                'potatura' => [2, 3],
            ],
            [
                'nome' => 'Noce',
                'immagine' => 'noce.png',
                'potatura' => [7, 8],
            ],
            [
                'nome' => 'Olivo',
                'immagine' => 'olivo.png',
                'potatura' => [3],
            ],
            [
                'nome' => 'Pesco',
                'immagine' => 'pesco.png',
                'potatura' => [2],
            ],
            [
                'nome' => 'Pino',
                'immagine' => 'pino.png',
                'potatura' => [5, 6],
            ],
            [
                'nome' => 'Platano',
                'immagine' => 'platano.png',
                'potatura' => [11, 12, 1],
            ],
            [
                'nome' => 'Pero',
                'immagine' => 'pero.png',
                'potatura' => [1, 2, 7],
            ],
            [
                'nome' => 'Quercia',
                'immagine' => 'quercia.png',
                'potatura' => [11, 12, 1, 2],
            ],
            [
                'nome' => 'Rododendro',
                'immagine' => 'rododendro.png',
                'potatura' => [5, 6],
            ],
            [
                'nome' => 'Rosa',
                'immagine' => 'rosa.png',
                'potatura' => [2, 3, 6, 7, 8, 9],
            ],
            [
                'nome' => 'Salice',
                'immagine' => 'salice.png',
                'potatura' => [2, 3],
            ],
            [
                'nome' => 'Tiglio',
                'immagine' => 'tiglio.png',
                'potatura' => [2, 3],
            ],
            [
                'nome' => 'Vite',
                'immagine' => 'vite.png',
                'potatura' => [1, 2, 7, 8],
            ],
            [
                'nome' => 'Weigela',
                'immagine' => 'weigela.png',
                'potatura' => [5, 6],
            ],            
        ];
    
        return view('potatura', compact('piante'));
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Flower;
use Illuminate\Database\Seeder;

class FlowerSeeder extends Seeder
{
        public function run(): void{
            $flowers = [
                ['name' => 'Rosa', 'image' => 'images/catalogo/rosa_rossa.jpg', 'color' => 'Rosso', 'season' => 'Primavera', 'type' => 'Perenne'],
                ['name' => 'Rosa', 'image' => 'images/catalogo/rosa_blu.jpg', 'color' => 'Blu', 'season' => 'Primavera', 'type' => 'Perenne'],
                ['name' => 'Rosa', 'image' => 'images/catalogo/rosa_gialla.jpg', 'color' => 'Giallo', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Rosa', 'image' => 'images/catalogo/rosa_bianca.jpg', 'color' => 'Bianco', 'season' => 'Autunno', 'type' => 'Perenne'],
                ['name' => 'Tulipano', 'image' => 'images/catalogo/tulipano_giallo.jpg', 'color' => 'Giallo', 'season' => 'Primavera', 'type' => 'Bulbosa'],
                ['name' => 'Tulipano', 'image' => 'images/catalogo/tulipano_viola.jpg', 'color' => 'Viola', 'season' => 'Primavera', 'type' => 'Bulbosa'],
                ['name' => 'Tulipano', 'image' => 'images/catalogo/tulipano_rosso.jpg', 'color' => 'Rosso', 'season' => 'Primavera', 'type' => 'Bulbosa'],
                ['name' => 'Girasole', 'image' => 'images/catalogo/girasole.jpg', 'color' => 'Giallo', 'season' => 'Estate', 'type' => 'Annuale'],
                ['name' => 'Margherita', 'image' => 'images/catalogo/margherita.jpg', 'color' => 'Bianco', 'season' => 'Primavera', 'type' => 'Perenne'],
                ['name' => 'Orchidea', 'image' => 'images/catalogo/orchidea_viola.jpg', 'color' => 'Viola', 'season' => 'Annuale', 'type' => 'Epifita'],
                ['name' => 'Orchidea', 'image' => 'images/catalogo/orchidea_rosa.jpg', 'color' => 'Rosa', 'season' => 'Annuale', 'type' => 'Epifita'],
                ['name' => 'Orchidea', 'image' => 'images/catalogo/orchidea_bianca.jpg', 'color' => 'Bianco', 'season' => 'Annuale', 'type' => 'Epifita'],
                ['name' => 'Lavanda', 'image' => 'images/catalogo/lavanda.jpg', 'color' => 'Viola', 'season' => 'Estate', 'type' => 'Arbustiva'],
                ['name' => 'Giglio', 'image' => 'images/catalogo/giglio_bianco.jpg', 'color' => 'Bianco', 'season' => 'Estate', 'type' => 'Bulbosa'],
                ['name' => 'Giglio', 'image' => 'images/catalogo/giglio_arancione.jpg', 'color' => 'Arancione', 'season' => 'Estate', 'type' => 'Bulbosa'],
                ['name' => 'Giglio', 'image' => 'images/catalogo/giglio_rosa.jpg', 'color' => 'Rosa', 'season' => 'Estate', 'type' => 'Bulbosa'],
                ['name' => 'Peonia', 'image' => 'images/catalogo/peonia_rosa.jpg', 'color' => 'Rosa', 'season' => 'Primavera', 'type' => 'Perenne'],
                ['name' => 'Peonia', 'image' => 'images/catalogo/peonia_rossa.jpg', 'color' => 'Rosso', 'season' => 'Primavera', 'type' => 'Perenne'],
                ['name' => 'Ortensia', 'image' => 'images/catalogo/ortensia_azzurra.jpg', 'color' => 'Azzurro', 'season' => 'Estate', 'type' => 'Arbustiva'],
                ['name' => 'Ortensia', 'image' => 'images/catalogo/ortensia_viola.jpg', 'color' => 'Viola', 'season' => 'Estate', 'type' => 'Arbustiva'],
                ['name' => 'Ortensia', 'image' => 'images/catalogo/ortensia_rosa.jpg', 'color' => 'Rosa', 'season' => 'Estate', 'type' => 'Arbustiva'],
                ['name' => 'Fiordaliso', 'image' => 'images/catalogo/fiordaliso.jpg', 'color' => 'Blu', 'season' => 'Primavera', 'type' => 'Annuale'],
                ['name' => 'Papavero', 'image' => 'images/catalogo/papavero.jpg', 'color' => 'Rosso', 'season' => 'Primavera', 'type' => 'Annuale'],
                ['name' => 'Narciso', 'image' => 'images/catalogo/narciso.jpg', 'color' => 'Giallo', 'season' => 'Primavera', 'type' => 'Bulbosa'],
                ['name' => 'Camelia', 'image' => 'images/catalogo/camelia_rosa.jpg', 'color' => 'Rosa', 'season' => 'Inverno', 'type' => 'Arbustiva'],
                ['name' => 'Camelia', 'image' => 'images/catalogo/camelia_bianca.jpg', 'color' => 'Bianco', 'season' => 'Inverno', 'type' => 'Arbustiva'],
                ['name' => 'Dalia', 'image' => 'images/catalogo/dalia_rossa.jpg', 'color' => 'Rosso', 'season' => 'Estate', 'type' => 'Bulbosa'],
                ['name' => 'Dalia', 'image' => 'images/catalogo/dalia_gialla.jpg', 'color' => 'Giallo', 'season' => 'Estate', 'type' => 'Bulbosa'],
                ['name' => 'Dalia', 'image' => 'images/catalogo/dalia_viola.jpg', 'color' => 'Viola', 'season' => 'Estate', 'type' => 'Bulbosa'],
                ['name' => 'Fresia', 'image' => 'images/catalogo/fresia_gialla.jpg', 'color' => 'Giallo', 'season' => 'Primavera', 'type' => 'Bulbosa'],
                ['name' => 'Fresia', 'image' => 'images/catalogo/fresia_rosa.jpg', 'color' => 'Rosa', 'season' => 'Primavera', 'type' => 'Bulbosa'],
                ['name' => 'Zinnia', 'image' => 'images/catalogo/zinnia_arancione.jpg', 'color' => 'Arancione', 'season' => 'Estate', 'type' => 'Annuale'],
                ['name' => 'Zinnia', 'image' => 'images/catalogo/zinnia_rossa.jpg', 'color' => 'Rosso', 'season' => 'Estate', 'type' => 'Annuale'],
                ['name' => 'Ibisco', 'image' => 'images/catalogo/ibisco_rosso.jpg', 'color' => 'Rosso', 'season' => 'Estate', 'type' => 'Arbustiva'],
                ['name' => 'Ibisco', 'image' => 'images/catalogo/ibisco_giallo.jpg', 'color' => 'Giallo', 'season' => 'Estate', 'type' => 'Arbustiva'],
                ['name' => 'Ibisco', 'image' => 'images/catalogo/ibisco_viola.jpg', 'color' => 'Viola', 'season' => 'Estate', 'type' => 'Arbustiva'],
                ['name' => 'Anemone', 'image' => 'images/catalogo/anemone_rosso.jpg', 'color' => 'Rosso', 'season' => 'Primavera', 'type' => 'Perenne'],
                ['name' => 'Anemone', 'image' => 'images/catalogo/anemone_viola.jpg', 'color' => 'Viola', 'season' => 'Primavera', 'type' => 'Perenne'],
                ['name' => 'Begonia', 'image' => 'images/catalogo/begonia_rosa.jpg', 'color' => 'Rosa', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Begonia', 'image' => 'images/catalogo/begonia_gialla.jpg', 'color' => 'Giallo', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Bocca di leone', 'image' => 'images/catalogo/bocca_di_leone_rossa.jpg', 'color' => 'Rosso', 'season' => 'Primavera', 'type' => 'Annuale'],
                ['name' => 'Bocca di leone', 'image' => 'images/catalogo/bocca_di_leone_arancione.jpg', 'color' => 'Arancione', 'season' => 'Primavera', 'type' => 'Annuale'],
                ['name' => 'Ciclamino', 'image' => 'images/catalogo/ciclamino_viola.jpg', 'color' => 'Viola', 'season' => 'Inverno', 'type' => 'Perenne'],
                ['name' => 'Ciclamino', 'image' => 'images/catalogo/ciclamino_bianco.jpg', 'color' => 'Bianco', 'season' => 'Inverno', 'type' => 'Perenne'],
                ['name' => 'Clematide', 'image' => 'images/catalogo/clematide_rosa.jpg', 'color' => 'Rosa', 'season' => 'Estate', 'type' => 'Rampicante'],
                ['name' => 'Clematide', 'image' => 'images/catalogo/clematide_blu.jpg', 'color' => 'Blu', 'season' => 'Estate', 'type' => 'Rampicante'],
                ['name' => 'Coreopsis', 'image' => 'images/catalogo/coreopsis_gialla.jpg', 'color' => 'Giallo', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Cosmea', 'image' => 'images/catalogo/cosmea_arancione.jpg', 'color' => 'Arancione', 'season' => 'Estate', 'type' => 'Annuale'],
                ['name' => 'Cosmea', 'image' => 'images/catalogo/cosmea_bianca.jpg', 'color' => 'Bianco', 'season' => 'Estate', 'type' => 'Annuale'],
                ['name' => 'Crisantemo', 'image' => 'images/catalogo/crisantemo_rosso.jpg', 'color' => 'Rosso', 'season' => 'Autunno', 'type' => 'Perenne'],
                ['name' => 'Crisantemo', 'image' => 'images/catalogo/crisantemo_viola.jpg', 'color' => 'Viola', 'season' => 'Autunno', 'type' => 'Perenne'],
                ['name' => 'Delphinium', 'image' => 'images/catalogo/delphinium_blu.jpg', 'color' => 'Blu', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Delphinium', 'image' => 'images/catalogo/delphinium_viola.jpg', 'color' => 'Viola', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Digitalis', 'image' => 'images/catalogo/digitalis_rosa.jpg', 'color' => 'Rosa', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Digitalis', 'image' => 'images/catalogo/digitalis_gialla.jpg', 'color' => 'Giallo', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Geranio', 'image' => 'images/catalogo/geranio_rosso.jpg', 'color' => 'Rosso', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Geranio', 'image' => 'images/catalogo/geranio_rosa.jpg', 'color' => 'Rosa', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Iris', 'image' => 'images/catalogo/iris_giallo.jpg', 'color' => 'Giallo', 'season' => 'Primavera', 'type' => 'Bulbosa'],
                ['name' => 'Iris', 'image' => 'images/catalogo/iris_viola.jpg', 'color' => 'Viola', 'season' => 'Primavera', 'type' => 'Bulbosa'],
                ['name' => 'Malva', 'image' => 'images/catalogo/malva_viola.jpg', 'color' => 'Viola', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Malva', 'image' => 'images/catalogo/malva_rosa.jpg', 'color' => 'Rosa', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Petunia', 'image' => 'images/catalogo/petunia_rossa.jpg', 'color' => 'Rosso', 'season' => 'Estate', 'type' => 'Annuale'],
                ['name' => 'Petunia', 'image' => 'images/catalogo/petunia_viola.jpg', 'color' => 'Viola', 'season' => 'Estate', 'type' => 'Annuale'],
                ['name' => 'Ranuncolo', 'image' => 'images/catalogo/ranuncolo_giallo.jpg', 'color' => 'Giallo', 'season' => 'Primavera', 'type' => 'Perenne'],
                ['name' => 'Ranuncolo', 'image' => 'images/catalogo/ranuncolo_arancione.jpg', 'color' => 'Arancione', 'season' => 'Primavera', 'type' => 'Perenne'],
                ['name' => 'Rododendro', 'image' => 'images/catalogo/rododendro_viola.jpg', 'color' => 'Viola', 'season' => 'Primavera', 'type' => 'Arbustiva'],
                ['name' => 'Rododendro', 'image' => 'images/catalogo/rododendro_rosa.jpg', 'color' => 'Rosa', 'season' => 'Primavera', 'type' => 'Arbustiva'],
                ['name' => 'Verbena', 'image' => 'images/catalogo/verbena_viola.jpg', 'color' => 'Viola', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Verbena', 'image' => 'images/catalogo/verbena_rossa.jpg', 'color' => 'Rosso', 'season' => 'Estate', 'type' => 'Perenne'],
                ['name' => 'Viola', 'image' => 'images/catalogo/viola_gialla.jpg', 'color' => 'Giallo', 'season' => 'Primavera', 'type' => 'Annuale'],
                ['name' => 'Viola', 'image' => 'images/catalogo/viola_blu.jpg', 'color' => 'Blu', 'season' => 'Primavera', 'type' => 'Annuale'],
            ];
            
            foreach ($flowers as $flower) {
                Flower::create($flower);
            }
        }
}
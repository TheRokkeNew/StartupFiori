<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Flower;
use Illuminate\Database\Seeder;

class FlowerSeeder extends Seeder
{   
    //Metodo run: esegue il popolamento della tabella flowers
    public function run(): void{
        $flowers = [
            //rosa
            [
                'name' => 'Rosa', 
                'image' => 'images/catalogo/rosa_rossa.jpg', 
                'color' => 'Rosso', 
                'season' => 'Primavera', 
                'type' => 'Perenne',
                'description' => 'La rosa rossa è simbolo universale di amore e passione. Fioritura abbondante con petali vellutati e profumo intenso',
                'care_sun' => 'Pieno sole (6+ ore al giorno)',
                'care_water' => 'Moderata (2-3 volte a settimana)',
                'care_soil' => 'Ricco di humus, ben drenato'
            ],
            [
                'name' => 'Rosa', 
                'image' => 'images/catalogo/rosa_blu.jpg', 
                'color' => 'Blu', 
                'season' => 'Primavera', 
                'type' => 'Perenne',
                'description' => 'Rosa dalle tonalità blu-viola. Fioritura prolungata',
                'care_sun' => 'Mezz\'ombra',
                'care_water' => 'Abbondante in estate',
                'care_soil' => 'Leggermente acido (pH 5.5-6.5)'
            ],
            [
                'name' => 'Rosa', 
                'image' => 'images/catalogo/rosa_gialla.jpg', 
                'color' => 'Giallo', 
                'season' => 'Estate', 
                'type' => 'Perenne',
                'description' => 'Rosa gialla che simboleggia amicizia e gioia. Varietà resistente con fiori doppi',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata, evitare ristagni',
                'care_soil' => 'Fertile e ben drenato'
            ],
            [
                'name' => 'Rosa', 
                'image' => 'images/catalogo/rosa_bianca.jpg', 
                'color' => 'Bianco', 
                'season' => 'Autunno', 
                'type' => 'Perenne',
                'description' => 'Purezza ed eleganza. Varietà rifiorente con fiori doppi',
                'care_sun' => 'Pieno sole/mezz\'ombra',
                'care_water' => '2 volte a settimana',
                'care_soil' => 'Ricco di sostanza organica'
            ],
            // Tulipani
            [
                'name' => 'Tulipano', 
                'image' => 'images/catalogo/tulipano_giallo.jpg', 
                'color' => 'Giallo', 
                'season' => 'Primavera', 
                'type' => 'Bulbosa',
                'description' => 'Giallo sole che annuncia la primavera. Perfetto per aiuole',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata durante la crescita',
                'care_soil' => 'Sabbioso'
            ],
            [
                'name' => 'Tulipano', 
                'image' => 'images/catalogo/tulipano_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Primavera', 
                'type' => 'Bulbosa',
                'description' => 'Tonalità regali, ideale per contrasti cromatici in giardino',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata',
                'care_soil' => 'Drenante'
            ],
            [
                'name' => 'Tulipano', 
                'image' => 'images/catalogo/tulipano_rosso.jpg', 
                'color' => 'Rosso', 
                'season' => 'Primavera', 
                'type' => 'Bulbosa',
                'description' => 'Classico tulipano rosso a coppa, simbolo di amore perfetto',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata',
                'care_soil' => 'Fertile'
            ],
            //girasole
            [
                'name' => 'Girasole', 
                'image' => 'images/catalogo/girasole.jpg', 
                'color' => 'Giallo', 
                'season' => 'Estate', 
                'type' => 'Annuale',
                'description' => 'Icona dell\'estate, segue il sole. Può superare 2m d\'altezza.',
                'care_sun' => 'Sole pieno',
                'care_water' => 'Abbondante',
                'care_soil' => 'Profondo e fertile'
            ],
            //margherita
            [
                'name' => 'Margherita', 
                'image' => 'images/catalogo/margherita.jpg', 
                'color' => 'Bianco', 
                'season' => 'Primavera', 
                'type' => 'Perenne',
                'description' => 'Semplicità e purezza. Fioritura abbondante e prolungata',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Regolare',
                'care_soil' => 'Qualsiasi tipo'
            ],
            //Orchidea 
            [
                'name' => 'Orchidea', 
                'image' => 'images/catalogo/orchidea_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Annuale', 
                'type' => 'Epifita',
                'description' => 'Elegante orchidea viola, ideale come pianta da interno con fiori longevi',
                'care_sun' => 'Luce indiretta',
                'care_water' => 'Moderata (1 volta a settimana)',
                'care_soil' => 'Corteccia e sfagno (muschio molto leggero e permeabile)'
            ],
            [
                'name' => 'Orchidea', 
                'image' => 'images/catalogo/orchidea_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Annuale', 
                'type' => 'Epifita',
                'description' => 'Orchidea rosa elegante con fiori a forma di farfalla, perfetta per interni luminosi',
                'care_sun' => 'Luce indiretta brillante',
                'care_water' => '1 volta a settimana, nebulizzare foglie',
                'care_soil' => 'Corteccia di pino e sfagno'
            ],
            [
                'name' => 'Orchidea', 
                'image' => 'images/catalogo/orchidea_bianca.jpg', 
                'color' => 'Bianco', 
                'season' => 'Annuale', 
                'type' => 'Epifita',
                'description' => 'Orchidea bianca pura, simbolo di raffinatezza. Fioritura lunga 2-3 mesi',
                'care_sun' => 'Luce filtrata',
                'care_water' => 'Immersione settimanale',
                'care_soil' => 'Mix per orchidee'
            ],
            //lavanda
            [
                'name' => 'Lavanda', 
                'image' => 'images/catalogo/lavanda.jpg', 
                'color' => 'Viola', 
                'season' => 'Estate', 
                'type' => 'Arbustiva',
                'description' => 'Profumatissima pianta mediterranea, ideale per bordure e essiccazione',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Poca acqua, resistente alla siccità',
                'care_soil' => 'Alcalino, ben drenato'
            ],
            //Giglio
            [
                'name' => 'Giglio', 
                'image' => 'images/catalogo/giglio_bianco.jpg', 
                'color' => 'Bianco', 
                'season' => 'Estate', 
                'type' => 'Bulbosa',
                'description' => 'Giglio bianco candido simbolo di purezza, con intenso profumo serale',
                'care_sun' => 'Pieno sole/mezz\'ombra',
                'care_water' => 'Moderata, evitare ristagni',
                'care_soil' => 'Ricco, pH neutro'
            ],
            [
                'name' => 'Giglio', 
                'image' => 'images/catalogo/giglio_arancione.jpg', 
                'color' => 'Arancione', 
                'season' => 'Estate', 
                'type' => 'Bulbosa',
                'description' => 'Giglio arancione vivace, fiori a tromba con macchie scure',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Regolare in crescita',
                'care_soil' => 'Fertile e drenante'
            ],
            [
                'name' => 'Giglio', 
                'image' => 'images/catalogo/giglio_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Estate', 
                'type' => 'Bulbosa',
                'description' => 'Delicato giglio rosa con petali ricurvi, poco profumato ma molto decorativo',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata',
                'care_soil' => 'Ricco di humus'
            ],
            //Peonia
            [
                'name' => 'Peonia', 
                'image' => 'images/catalogo/peonia_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Primavera', 
                'type' => 'Perenne',
                'description' => 'Peonia rosa a fiore doppio, molto apprezzata per i grandi fiori vaporosi',
                'care_sun' => 'Pieno sole/mezz\'ombra',
                'care_water' => 'Abbondante in fioritura',
                'care_soil' => 'Profondo e fertile'
            ],
            [
                'name' => 'Peonia', 
                'image' => 'images/catalogo/peonia_rossa.jpg', 
                'color' => 'Rosso', 
                'season' => 'Primavera', 
                'type' => 'Perenne',
                'description' => 'Peonia rossa intenso, fiori grandi fino a 15cm di diametro',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata ma costante',
                'care_soil' => 'Argilloso, ricco'
            ],
            //Ortensia
            [
                'name' => 'Ortensia', 
                'image' => 'images/catalogo/ortensia_azzurra.jpg', 
                'color' => 'Azzurro', 
                'season' => 'Estate', 
                'type' => 'Arbustiva',
                'description' => 'Ortensia azzurra il cui colore varia con il pH del terreno. Infiorescenze a palla',
                'care_sun' => 'Mezz\'ombra',
                'care_water' => 'Abbondante, non tollera la siccità',
                'care_soil' => 'Acido per mantenere il colore blu'
            ],
            [
                'name' => 'Ortensia', 
                'image' => 'images/catalogo/ortensia_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Estate', 
                'type' => 'Arbustiva',
                'description' => 'Ortensia viola con fiori a lacecap (centro fertile circondato da fiori sterili)',
                'care_sun' => 'Ombra luminosa',
                'care_water' => 'Terreno sempre fresco',
                'care_soil' => 'Acido (pH 5-5.5)'
            ],
            [
                'name' => 'Ortensia', 
                'image' => 'images/catalogo/ortensia_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Estate', 
                'type' => 'Arbustiva',
                'description' => 'Ortensia rosa vivace, preferisce terreni neutri/alcalini. Fioritura estiva abbondante',
                'care_sun' => 'Ombra parziale',
                'care_water' => 'Abbondante in estate',
                'care_soil' => 'Neutro/alcalino (pH 6-7)'
            ],
            //Fiordaliso 
            [
                'name' => 'Fiordaliso', 
                'image' => 'images/catalogo/fiordaliso.jpg', 
                'color' => 'Blu', 
                'season' => 'Primavera', 
                'type' => 'Annuale',
                'description' => 'Fiordaliso blu intenso, fiore spontaneo dei campi di grano. Ottimo per bouquet',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata',
                'care_soil' => 'Qualsiasi tipo, anche povero'
            ],
            //Papavero
            [
                'name' => 'Papavero', 
                'image' => 'images/catalogo/papavero.jpg', 
                'color' => 'Rosso', 
                'season' => 'Primavera', 
                'type' => 'Annuale',
                'description' => 'Papavero rosso selvatico, petali delicati che cadono facilmente',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Poca, resistente',
                'care_soil' => 'Povero, sassoso'
            ],
            //Narciso 
            [
                'name' => 'Narciso', 
                'image' => 'images/catalogo/narciso.jpg', 
                'color' => 'Giallo', 
                'season' => 'Primavera', 
                'type' => 'Bulbosa',
                'description' => 'Narciso giallo a tromba, tra i primi fiori a sbocciare a fine inverno.',
                'care_sun' => 'Pieno sole/mezz\'ombra',
                'care_water' => 'Moderata',
                'care_soil' => 'Fertile, ben drenato'
            ],
            // Camelia
            [
                'name' => 'Camelia', 
                'image' => 'images/catalogo/camelia_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Inverno', 
                'type' => 'Arbustiva',
                'description' => 'Camelia rosa con fiori doppi e foglie lucide, fioritura invernale elegante.',
                'care_sun' => 'Mezz\'ombra',
                'care_water' => 'Regolare, terreno sempre umido',
                'care_soil' => 'Acido (pH 5-6), ricco di humus'
            ],
            [
                'name' => 'Camelia', 
                'image' => 'images/catalogo/camelia_bianca.jpg', 
                'color' => 'Bianco', 
                'season' => 'Inverno', 
                'type' => 'Arbustiva',
                'description' => 'Camelia bianca pura, fiori perfettamente simmetrici. Resistente al freddo.',
                'care_sun' => 'Ombra luminosa',
                'care_water' => 'Non lasciar seccare il terreno',
                'care_soil' => 'Acido, ben drenato'
            ],
            // Dalia
            [
                'name' => 'Dalia', 
                'image' => 'images/catalogo/dalia_rossa.jpg', 
                'color' => 'Rosso', 
                'season' => 'Estate', 
                'type' => 'Bulbosa',
                'description' => 'Dalia rossa a fiore di cactus, petali appuntiti e ricurvi. Diametro fino a 20cm.',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Abbondante in crescita',
                'care_soil' => 'Fertile, ben concimato'
            ],
            [
                'name' => 'Dalia', 
                'image' => 'images/catalogo/dalia_gialla.jpg', 
                'color' => 'Giallo', 
                'season' => 'Estate', 
                'type' => 'Bulbosa',
                'description' => 'Dalia gialla pompon, perfetta per bouquet. Fiori globosi molto compatti.',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Regolare senza bagnare foglie',
                'care_soil' => 'Ricco, ben drenato'
            ],
            [
                'name' => 'Dalia', 
                'image' => 'images/catalogo/dalia_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Estate', 
                'type' => 'Bulbosa',
                'description' => 'Dalia viola scuro a collaretto, con petali esterni piatti e centro a pompon.',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata ma costante',
                'care_soil' => 'Fertile, pH neutro'
            ],
            // Fresia
            [
                'name' => 'Fresia', 
                'image' => 'images/catalogo/fresia_gialla.jpg', 
                'color' => 'Giallo', 
                'season' => 'Primavera', 
                'type' => 'Bulbosa',
                'description' => 'Fresia gialla intenso, profumatissima. Ideale per bordure e fiori recisi.',
                'care_sun' => 'Pieno sole/mezz\'ombra',
                'care_water' => 'Moderata durante crescita',
                'care_soil' => 'Leggero, sabbioso'
            ],
            [
                'name' => 'Fresia', 
                'image' => 'images/catalogo/fresia_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Primavera', 
                'type' => 'Bulbosa',
                'description' => 'Fresia rosa pastello, delicata ma dal profumo intenso e speziato.',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Regolare senza eccessi',
                'care_soil' => 'Ben drenato'
            ],
            // Zinnia
            [
                'name' => 'Zinnia', 
                'image' => 'images/catalogo/zinnia_arancione.jpg', 
                'color' => 'Arancione', 
                'season' => 'Estate', 
                'type' => 'Annuale',
                'description' => 'Zinnia arancione vivace, fiori doppi resistenti al caldo. Attira farfalle.',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata, alla base',
                'care_soil' => 'Qualsiasi tipo'
            ],
            [
                'name' => 'Zinnia', 
                'image' => 'images/catalogo/zinnia_rossa.jpg', 
                'color' => 'Rosso', 
                'season' => 'Estate', 
                'type' => 'Annuale',
                'description' => 'Zinnia rosso fuoco, fioritura abbondante da giugno fino ai primi freddi.',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Lasciar asciugare tra un\'annaffiatura e l\'altra',
                'care_soil' => 'Non particolarmente esigente'
            ],

            // Ibisco
            [
                'name' => 'Ibisco', 
                'image' => 'images/catalogo/ibisco_rosso.jpg', 
                'color' => 'Rosso', 
                'season' => 'Estate', 
                'type' => 'Arbustiva',
                'description' => 'Ibisco rosso cinese, grandi fiori a tromba. Simbolo delle Hawaii.',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Abbondante in estate',
                'care_soil' => 'Ricco, ben drenato'
            ],
            [
                'name' => 'Ibisco', 
                'image' => 'images/catalogo/ibisco_giallo.jpg', 
                'color' => 'Giallo', 
                'season' => 'Estate', 
                'type' => 'Arbustiva',
                'description' => 'Ibisco giallo sole, fiori a campana con stami prominenti.',
                'care_sun' => 'Pieno sole/mezz\'ombra',
                'care_water' => 'Mantenere umido',
                'care_soil' => 'Fertile, pH leggermente acido'
            ],
            [
                'name' => 'Ibisco', 
                'image' => 'images/catalogo/ibisco_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Estate', 
                'type' => 'Arbustiva',
                'description' => 'Ibisco viola con centro rosso, fiori grandi fino a 15cm di diametro.',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Regolare, non tollera la siccità',
                'care_soil' => 'Ricco di sostanza organica'
            ],

            // Anemone
            [
                'name' => 'Anemone', 
                'image' => 'images/catalogo/anemone_rosso.jpg', 
                'color' => 'Rosso', 
                'season' => 'Primavera', 
                'type' => 'Perenne',
                'description' => 'Anemone rosso papavero, fiore semplice ma elegante su steli sottili.',
                'care_sun' => 'Mezz\'ombra',
                'care_water' => 'Terreno sempre fresco',
                'care_soil' => 'Ricco, umifero'
            ],
            [
                'name' => 'Anemone', 
                'image' => 'images/catalogo/anemone_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Primavera', 
                'type' => 'Perenne',
                'description' => 'Anemone viola a fiore doppio, perfetto per giardini boschivi.',
                'care_sun' => 'Ombra parziale',
                'care_water' => 'Moderata ma costante',
                'care_soil' => 'Ben drenato'
            ],
            // Begonia
            [
                'name' => 'Begonia', 
                'image' => 'images/catalogo/begonia_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Estate', 
                'type' => 'Perenne',
                'description' => 'Begonia rosa a fiore doppio, ideale per vasi e fioriere all\'ombra.',
                'care_sun' => 'Ombra/mezz\'ombra',
                'care_water' => 'Moderata, non bagnare foglie',
                'care_soil' => 'Leggero, drenante'
            ],
            [
                'name' => 'Begonia', 
                'image' => 'images/catalogo/begonia_gialla.jpg', 
                'color' => 'Giallo', 
                'season' => 'Estate', 
                'type' => 'Perenne',
                'description' => 'Begonia gialla luminosa, foglie decorative e fioritura prolungata.',
                'care_sun' => 'Ombra luminosa',
                'care_water' => 'Lasciar asciugare tra le annaffiature',
                'care_soil' => 'Ricco di torba'
            ],
            // Bocca di leone
            [
                'name' => 'Bocca di leone', 
                'image' => 'images/catalogo/bocca_di_leone_rossa.jpg', 
                'color' => 'Rosso', 
                'season' => 'Primavera', 
                'type' => 'Annuale',
                'description' => 'Bocca di leone rosso acceso, fiori a forma di mascella che si aprono se schiacciati.',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata',
                'care_soil' => 'Non esigente'
            ],
            [
                'name' => 'Bocca di leone', 
                'image' => 'images/catalogo/bocca_di_leone_arancione.jpg', 
                'color' => 'Arancione', 
                'season' => 'Primavera', 
                'type' => 'Annuale',
                'description' => 'Bocca di leone arancione vivace, steli eretti perfetti per bordure.',
                'care_sun' => 'Pieno sole/mezz\'ombra',
                'care_water' => 'Regolare',
                'care_soil' => 'Fertile'
            ],
            // Ciclamino
            [
                'name' => 'Ciclamino', 
                'image' => 'images/catalogo/ciclamino_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Inverno', 
                'type' => 'Perenne',
                'description' => 'Ciclamino viola intenso, fiori rivolti verso l\'alto su steli carnosi.',
                'care_sun' => 'Luce indiretta',
                'care_water' => 'Nel sottovaso, evitare ristagni',
                'care_soil' => 'Per piante acidofile'
            ],
            [
                'name' => 'Ciclamino', 
                'image' => 'images/catalogo/ciclamino_bianco.jpg', 
                'color' => 'Bianco', 
                'season' => 'Inverno', 
                'type' => 'Perenne',
                'description' => 'Ciclamino bianco puro con foglie marmorizzate. Fioritura invernale.',
                'care_sun' => 'Ombra luminosa',
                'care_water' => 'Moderata, acqua a temperatura ambiente',
                'care_soil' => 'Leggero e drenante'
            ],
            // Clematide
            [
                'name' => 'Clematide', 
                'image' => 'images/catalogo/clematide_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Estate', 
                'type' => 'Rampicante',
                'description' => 'Clematide rosa a fiore grande, ideale per pergolati e graticci.',
                'care_sun' => 'Sole su fiori, ombra su radici',
                'care_water' => 'Abbondante in crescita',
                'care_soil' => 'Fresco e umido'
            ],
            [
                'name' => 'Clematide', 
                'image' => 'images/catalogo/clematide_blu.jpg', 
                'color' => 'Blu', 
                'season' => 'Estate', 
                'type' => 'Rampicante',
                'description' => 'Clematide blu-viola, tra le poche rampicanti con questa tonalità.',
                'care_sun' => 'Mezz\'ombra',
                'care_water' => 'Terreno sempre fresco',
                'care_soil' => 'Ricco, ben drenato'
            ],

            // Coreopsis
            [
                'name' => 'Coreopsis', 
                'image' => 'images/catalogo/coreopsis_gialla.jpg', 
                'color' => 'Giallo', 
                'season' => 'Estate', 
                'type' => 'Perenne',
                'description' => 'Coreopsis giallo brillante, fiori simili a margherite. Fioritura prolungata.',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata, resistente alla siccità',
                'care_soil' => 'Non esigente'
            ],
            // Cosmea
            [
                'name' => 'Cosmea', 
                'image' => 'images/catalogo/cosmea_bianca.jpg', 
                'color' => 'Bianco', 
                'season' => 'Estate', 
                'type' => 'Annuale',
                'description' => 'Fiori delicati a forma di coppa con petali sottili. Attira farfalle.',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata',
                'care_soil' => 'Ben drenato'
            ],
            [
                'name' => 'Cosmea', 
                'image' => 'images/catalogo/cosmea_arancione.jpg', 
                'color' => 'Arancione', 
                'season' => 'Estate', 
                'type' => 'Annuale',
                'description' => 'Fiori vivaci a forma di coppa con petali sottili e centro giallo-dorato. Eccezionale attrattore per farfalle e api',
                'care_sun' => 'Pieno sole (minimo 6 ore al giorno)',
                'care_water' => 'Moderata (resistente alla siccità)',
                'care_soil' => 'Ben drenato, tollera anche terreni poveri'
            ],
            // Crisantemo
            [
                'name' => 'Crisantemo', 
                'image' => 'images/catalogo/crisantemo_rosso.jpg', 
                'color' => 'Rosso', 
                'season' => 'Autunno', 
                'type' => 'Perenne',
                'description' => 'Fiori pompon di un rosso intenso, simbolo di vitalità. Ideale per bordure autunnali e composizioni in vaso. Fioritura abbondante che resiste ai primi freddi',
                'care_sun' => 'Pieno sole (almeno 5 ore al giorno)',
                'care_water' => 'Regolare (mantenere il terreno umido ma non zuppo)',
                'care_soil' => 'Fertile, ben drenato, pH 6.0-6.7'
            ],
            [
                'name' => 'Crisantemo', 
                'image' => 'images/catalogo/crisantemo_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Autunno', 
                'type' => 'Perenne',
                'description' => 'Fiori dal viola chiaro al porpora intenso, con petali a volte bicolori. Eccellente per attrarre impollinatori tardivi e creare macchie di colore quando il giardino inizia a spogliarsi',
                'care_sun' => 'Sole-mezz\'ombra (preferisce il fresco pomeridiano nelle zone calde)',
                'care_water' => 'Abbondante durante la fioritura, ridurre in inverno',
                'care_soil' => 'Ricco di humus, ottimo drenaggio'
            ],  
            [
                'name' => 'Crisantemo', 
                'image' => 'images/catalogo/crisantemo_bianco.jpg', 
                'color' => 'Bianco', 
                'season' => 'Autunno', 
                'type' => 'Perenne',
                'description' => 'Simbolo di verità e purezza nell\'arte floreale orientale. Capolini pieni e longevi',
                'care_sun' => 'Pieno sole/mezz\'ombra',
                'care_water' => 'Moderata',
                'care_soil' => 'Fertile, ben drenato'
            ],         
            // Delphinium
            [
                'name' => 'Delphinium', 
                'image' => 'images/catalogo/delphinium_blu.jpg', 
                'color' => 'Blu', 
                'season' => 'Primavera-Estate', 
                'type' => 'Perenne',
                'description' => 'Spighe verticali di fiori blu intenso con occhio bianco, ideali per bordure alte. Varietà rifiorente se cimata.',
                'care_sun' => 'Pieno sole (tollera mezz\'ombra al Sud)',
                'care_water' => 'Abbondante, mai acqua stagnante',
                'care_soil' => 'Ricco, fresco, pH neutro-alcalino'
            ],
            [
                'name' => 'Delphinium', 
                'image' => 'images/catalogo/delphinium_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Estate', 
                'type' => 'Perenne',
                'description' => 'Fiori doppi viola-lavanda su steli robusti. Ottimo fiore reciso. Attenzione: tossico se ingerito.',
                'care_sun' => 'Sole diretto (almeno 6h)',
                'care_water' => 'Regolare, evitare ristagni',
                'care_soil' => 'Profondo, ben concimato'
            ],
            // Digitalis
            [
                'name' => 'Digitalis', 
                'image' => 'images/catalogo/digitalis_gialla.jpg', 
                'color' => 'Giallo', 
                'season' => 'Primavera-Estate', 
                'type' => 'Biennale',
                'description' => 'Spighe di fiori campanulati giallo crema con macule interne. Pianta medicinale ma velenosa.',
                'care_sun' => 'Mezz\'ombra',
                'care_water' => 'Moderata, resiste a brevi siccità',
                'care_soil' => 'Acido, ricco di humus'
            ],
            [
                'name' => 'Digitalis', 
                'image' => 'images/catalogo/digitalis_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Estate', 
                'type' => 'Biennale',
                'description' => 'Varietà "Dalmatian Peach" con fiori rosa pesca punteggiati. Autosemina naturale.',
                'care_sun' => 'Ombra luminosa',
                'care_water' => 'Mantenere umido',
                'care_soil' => 'Fresco, ben drenato'
            ],
            // Geranio
            [
                'name' => 'Geranio', 
                'image' => 'images/catalogo/geranio_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Primavera-Autunno', 
                'type' => 'Perenne',
                'description' => 'Fiori rosa tenue a mazzetti. Foglie aromatiche. Varietà "Appleblossom" particolarmente resistente.',
                'care_sun' => 'Sole pieno',
                'care_water' => 'Moderata, asciugare tra un\'annaffiatura e l\'altra',
                'care_soil' => 'Leggero, sabbioso'
            ],
            [
                'name' => 'Geranio', 
                'image' => 'images/catalogo/geranio_rosso.jpg', 
                'color' => 'Rosso', 
                'season' => 'annuale', 
                'type' => 'Perenne',
                'description' => 'Classico geranio zonale con fiori rosso vivo a ombrello. Resiste al caldo urbano.',
                'care_sun' => 'Sole/mezz\'ombra',
                'care_water' => 'Regolare, ridurre in inverno',
                'care_soil' => 'Terriccio universale'   
            ],
            // Iris
            [
                'name' => 'Iris', 
                'image' => 'images/catalogo/iris_giallo.jpg', 
                'color' => 'Giallo', 
                'season' => 'Primavera', 
                'type' => 'Rizomatoso',
                'description' => 'Iris barbato con petali giallo oro e barba arancione. Profumo leggero',
                'care_sun' => 'Sole pieno',
                'care_water' => 'Media, asciutto dopo la fioritura',
                'care_soil' => 'Alcalino, ben drenato'
            ],
            [
                'name' => 'Iris', 
                'image' => 'images/catalogo/iris_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Primavera', 
                'type' => 'Rizomatoso',
                'description' => 'Fiori viola intenso con petali vellutati. Simbolo di saggezza nella floricoltura',
                'care_sun' => 'Sole diretto',
                'care_water' => 'Limitata, resistente alla siccità',
                'care_soil' => 'Sabbioso, povero'
            ],
            // Malva
            [
                'name' => 'Malva', 
                'image' => 'images/catalogo/malva_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Estate-Autunno', 
                'type' => 'Perenne',
                'description' => 'Fiori rosa pallido a coppa con venature più scure. Usata in erboristeria per infusi',
                'care_sun' => 'Sole/mezz\'ombra',
                'care_water' => 'Bassa manutenzione',
                'care_soil' => 'Qualsiasi tipo'
            ],
            [
                'name' => 'Malva', 
                'image' => 'images/catalogo/malva_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Estate', 
                'type' => 'Perenne',
                'description' => 'Varietà "Mauritiana" con fiori viola-blu elettrico. Crescita rapida',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata',
                'care_soil' => 'Tollera terreni argillosi'
            ],
            // Petunia
            [
                'name' => 'Petunia', 
                'image' => 'images/catalogo/petunia_rossa.jpg', 
                'color' => 'Rosso', 
                'season' => 'Primavera-Autunno', 
                'type' => 'Annuale',
                'description' => 'Fiori vellutati rosso cardinale. Varietà "Surfinia" a portamento ricadente per vasi sospesi',
                'care_sun' => 'Sole pieno',
                'care_water' => 'Abbondante, quotidiana in estate',
                'care_soil' => 'Acido (pH 5.5-6.5)'
            ],
            [
                'name' => 'Petunia', 
                'image' => 'images/catalogo/petunia_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Annuale', 
                'type' => 'Annuale',
                'description' => 'Petunia "Night Sky" con sfumature viola scuro e macchie bianche che ricordano le stelle',
                'care_sun' => 'Sole diretto',
                'care_water' => 'Regolare, evitare bagnatura foglie',
                'care_soil' => 'Ricco di torba'
            ],
            // Ranuncolo
            [
                'name' => 'Ranuncolo', 
                'image' => 'images/catalogo/ranuncolo_arancione.jpg', 
                'color' => 'Arancione', 
                'season' => 'Primavera', 
                'type' => 'Bulbosa',
                'description' => 'Fiori doppi arancione acceso con centro scuro. Eccellente per bouquet',
                'care_sun' => 'Mezz\'ombra',
                'care_water' => 'Abbondante durante la crescita',
                'care_soil' => 'Fresco, ben drenato'
            ],
            [
                'name' => 'Ranuncolo', 
                'image' => 'images/catalogo/ranuncolo_giallo.jpg', 
                'color' => 'Giallo', 
                'season' => 'Primavera', 
                'type' => 'Bulbosa',
                'description' => 'Varietà "Tecolote" con fiori giallo limone a forma di rosa. Tossico per animali',
                'care_sun' => 'Sole filtrato',
                'care_water' => 'Moderata',
                'care_soil' => 'Ricco di sostanza organica'
            ],
            [
                'name' => 'Ranuncolo', 
                'image' => 'images/catalogo/ranuncolo_rosso.jpg', 
                'color' => 'Rosso', 
                'season' => 'Primavera', 
                'type' => 'Bulbosa',
                'description' => 'Fiori a coppa con petali stratificati, simbolo di attrazione irresistibile. Effetto vellutato',
                'care_sun' => 'Pieno sole/mezz\'ombra',
                'care_water' => 'Abbondante in crescita',
                'care_soil' => 'Ricco, fresco, ben drenato'
            ],
            [
                'name' => 'Ranuncolo', 
                'image' => 'images/catalogo/ranuncolo.jpg',
                'color' => 'Misti',
                'season' => 'Primavera-Estate',
                'type' => 'Bulbosa',
                'description' => 'Esplosione di colori pastello con petali a stratificazione serrata. Ogni fiore sembra dipinto a mano.',
                'care_sun' => 'Luce filtrata',
                'care_water' => 'Moderata (evitare ristagni)',
                'care_soil' => 'Leggero con sabbia grossolana',
                'design_use' => 'Centrotavola nuziali, bouquet romantici'
            ],
            // Rododendro
            [
                'name' => 'Rododendro', 
                'image' => 'images/catalogo/rododendro_rosa.jpg', 
                'color' => 'Rosa', 
                'season' => 'Primavera', 
                'type' => 'Arbustivo',
                'description' => 'Grandi grappoli di fiori rosa confetto. Foglie coriacee sempreverdi. Crescita lenta',
                'care_sun' => 'Ombra parziale',
                'care_water' => 'Acqua piovana, no calcare',
                'care_soil' => 'Acido (pH 4.5-5.5)'
            ],
            [
                'name' => 'Rododendro', 
                'image' => 'images/catalogo/rododendro_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Primavera', 
                'type' => 'Arbustivo',
                'description' => 'Cultivar "Purple Passion" con fiori viola intenso. Ideale per terreni boschivi',
                'care_sun' => 'Ombra luminosa',
                'care_water' => 'Mantenere umido',
                'care_soil' => 'Terriccio per acidofile'
            ],
            // Verbena
            [
                'name' => 'Verbena', 
                'image' => 'images/catalogo/verbena_rossa.jpg', 
                'color' => 'Rosso', 
                'season' => 'Estate-Autunno', 
                'type' => 'Annuale',
                'description' => 'Infiorescenze piatte rosso rubino. Attira farfalle. Varietà "Lanai Twister" con fiori bicolori',
                'care_sun' => 'Sole pieno',
                'care_water' => 'Moderata',
                'care_soil' => 'Drenante'
            ],
            [
                'name' => 'Verbena', 
                'image' => 'images/catalogo/verbena_viola.jpg', 
                'color' => 'Viola', 
                'season' => 'Estate-Autunno', 
                'type' => 'Perenne',
                'description' => 'Verbena bonariensis con steli aerei e piccoli fiori viola chiaro. Stile naturale',
                'care_sun' => 'Sole',
                'care_water' => 'Bisogni idrici bassi',
                'care_soil' => 'Povero, sassoso'
            ],
            // Viola
            [
                'name' => 'Viola', 
                'image' => 'images/catalogo/viola_blu.jpg', 
                'color' => 'Blu', 
                'season' => 'Primavera-Autunno', 
                'type' => 'Perenne',
                'description' => 'Viola del pensiero blu notte con gola gialla. Commestibile per decorare piatti',
                'care_sun' => 'Mezz\'ombra',
                'care_water' => 'Terreno sempre fresco',
                'care_soil' => 'Fertile, umifero'
            ], 
            [
                'name' => 'Viola', 
                'image' => 'images/catalogo/viola_gialla.jpg', 
                'color' => 'Giallo', 
                'season' => 'Inverno-Primavera', 
                'type' => 'Perenne',
                'description' => 'Viola cornuta "Yellow Perfection" con fiori giallo oro. Resiste al freddo',
                'care_sun' => 'Sole/ombra',
                'care_water' => 'Regolare',
                'care_soil' => 'Fresco, ben drenato'
            ], 
            //calla
            [
                'name' => 'Calla', 
                'image' => 'images/catalogo/calla.jpg', 
                'color' => 'Bianco', 
                'season' => 'Estate', 
                'type' => 'Perenne',
                'description' => 'Elegante fiore a calice, simbolo di purezza e bellezza sublime. Forma scultorea e lucentezza cerosa',
                'care_sun' => 'Mezz\'ombra',
                'care_water' => 'Abbondante (terreno sempre umido)',
                'care_soil' => 'Ricco, ben drenato, pH leggermente acido'
            ],   
            //queen of sweden
            [
                'name' => 'Queen of Sweden', 
                'image' => 'images/catalogo/queen_sweden.jpg', 
                'color' => 'Rosa', 
                'season' => 'Estate-Autunno', 
                'type' => 'Rosa inglese',
                'description' => 'Rosa romantica dai petali soffusi di rosa pesca, con delicato profumo di mirra e mandorla',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Regolare senza ristagni',
                'care_soil' => 'Fertile e ben drenato'  
            ],
            //garofano colorato 
            [
                'name' => 'Garofano', 
                'image' => 'images/catalogo/garofano.jpg', 
                'color' => 'Misti', 
                'season' => 'Primavera-Estate', 
                'type' => 'Perenne',
                'description' => 'Fiori frastagliati dai colori vivaci, simbolo di fascino e distinzione. Profumo speziato',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata (resistente alla siccità)',
                'care_soil' => 'Ben drenato, pH neutro'
            ],
            //gerbera colorata
            [
                'name' => 'Gerbera', 
                'image' => 'images/catalogo/gerbera.jpg', 
                'color' => 'Misti', 
                'season' => 'Primavera-Autunno', 
                'type' => 'Perenne',
                'description' => 'Grandi margherite dai colori brillanti, portatrici di gioia e solarità. Lunga durata',
                'care_sun' => 'Luce intensa (no sole diretto estivo)',
                'care_water' => 'Regolare (evitare ristagni)',
                'care_soil' => 'Leggero e drenante'
            ],
            //Mimosa classica
            [
                'name' => 'Mimosa Classica', 
                'image' => 'images/catalogo/mimosa.jpg', 
                'color' => 'Giallo', 
                'season' => 'Inverno', 
                'type' => 'Albero sempreverde',
                'description' => 'Simbolo della Festa della Donna. Piumosi capolini gialli dal profumo delicato',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata (resistente alla siccità)',
                'care_soil' => 'Acido, sabbioso'
            ],         
            //mimosa deluxe 
            [
                'name' => 'Mimosa Deluxe', 
                'image' => 'images/catalogo/mimosaDeluxe.jpg', 
                'color' => 'Giallo', 
                'season' => 'Inverno', 
                'type' => 'Varietà premium',
                'description' => 'Selezione speciale con fiori più grandi e intensamente profumati. Portamento elegante',
                'care_sun' => 'Pieno sole',
                'care_water' => 'Moderata con drenaggio perfetto',
                'care_soil' => 'Acido, arricchito con torba'
            ],
            //Mimosa elegante 
            [
                'name' => 'Mimosa Elegante', 
                'image' => 'images/catalogo/mimosaElegante.jpg', 
                'color' => 'Giallo', 
                'season' => 'Primavera', 
                'type' => 'Ibrido ornamentale',
                'description' => 'Varietà dai rami armoniosi e fiori particolarmente vaporosi. Fogliame decorativo',
                'care_sun' => 'Pieno sole/mezz\'ombra',
                'care_water' => 'Regolare senza eccessi',
                'care_soil' => 'Fresco, ben drenato'
            ]         
        ];           
        //Crea ogni fiore nel database 
        foreach ($flowers as $flower) {
            Flower::create($flower); 
        }
    }
}
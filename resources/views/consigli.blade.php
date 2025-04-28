@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #e9f7ef;
    }
    .section-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: #2d6a4f;
        margin-bottom: 1rem;
    }
    .card-simple {
        border: 1px solid #d1e7dd;
        border-radius: 10px;
        overflow: hidden;
        background-color: white;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .card-simple img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }
    .card-body {
        padding: 1rem;
        flex-grow: 1;
    }
    .card-title {
        font-size: 1.4rem;
        margin-bottom: 0.5rem;
        color: #2d6a4f;
    }
    .card-text {
        font-size: 1rem;
        color: #555;
    }
    .more-text {
        display: none;
        margin-top: 10px;
    }
    .btn-toggle {
        background-color: transparent;
        border: none;
        color: #2d6a4f;
        font-weight: bold;
        cursor: pointer;
        margin-top: 10px;
        padding: 0;
    }
</style>

<div class="container py-4">
    <div class="text-center">
        <h1 class="section-title">🌿 Cura e Manutenzione del Giardino</h1>
        <p class="lead mb-4">Segui i nostri consigli per creare e mantenere uno spazio verde rigoglioso e accogliente!</p>
    </div>

    <div class="row g-4">
        @php
            $consigli = [
                [
                    'titolo' => '💧 Innaffiatura Regolare',
                    'dettagli' => 'Annaffia al mattino presto o in serata. Questo favorisce un migliore assorbimento dell’acqua e rafforza le radici contro la siccità estiva.',
                    'img' => 'images/giardino/innaffiatura.jpg'
                ],
                [
                    'titolo' => '✂️ Potatura Stagionale',
                    'dettagli' => 'Effettua potature regolari per piante sane. Rimuovere i rami morti stimola la produzione di nuovi germogli e mantiene la forma delle piante.',
                    'img' => 'images/giardino/potatura.jpg'
                ],
                [
                    'titolo' => '🌾 Controllo delle Erbacce',
                    'dettagli' => 'Contieni le erbacce con metodi naturali. La pacciamatura mantiene l’umidità del suolo e impedisce la crescita di piante infestanti.',
                    'img' => 'images/giardino/erbacce.jpg'
                ],
                [
                    'titolo' => '🌱 Concimazione Naturale',
                    'dettagli' => 'Nutri il terreno con compost o letame maturo. I concimi naturali arricchiscono il suolo di nutrienti essenziali, migliorano la struttura del terreno e rendono le piante più resistenti alle malattie.',
                    'img' => 'images/giardino/concime.jpg'
                ],
                [
                    'titolo' => '🌿 Cura del Prato',
                    'dettagli' => 'Taglia il prato regolarmente per mantenerlo sano. Non tagliare troppo corto! Lasciare un’altezza giusta protegge il prato dalla siccità e dalle infestazioni di erbacce.',
                    'img' => 'images/giardino/prato.jpg'
                ],
                [
                    'titolo' => '🛡️ Protezione dalle Malattie',
                    'dettagli' => 'Controlla spesso foglie e fusti. Rimuovi tempestivamente parti infette e, se necessario, usa trattamenti naturali come macerati d’aglio o sapone molle contro insetti e funghi.',
                    'img' => 'images/giardino/malattie.jpg'
                ],
                [
                    'titolo' => '🔄 Rotazione delle Colture',
                    'dettagli' => 'Cambia posizione alle piante ogni anno. Alternare le colture evita il consumo degli stessi nutrienti e riduce il rischio di malattie specifiche del suolo.',
                    'img' => 'images/giardino/rotazione.jpg'
                ],
                [
                    'titolo' => '🐝 Attira Insetti Utili',
                    'dettagli' => 'Favorisci la presenza di api e farfalle. Pianta fiori colorati e aromatici come lavanda, calendula e echinacea. Gli insetti utili aiutano a impollinare e a controllare i parassiti.',
                    'img' => 'images/giardino/insetti.jpg'
                ],
                [
                    'titolo' => '🌸 Piantumazione Strategica',
                    'dettagli' => 'Organizza il giardino in base al sole. Metti le piante che amano il sole pieno in zone esposte e quelle da ombra in angoli più freschi, così eviti stress e migliori la crescita.',
                    'img' => 'images/giardino/piantumazione.jpg'
                ],
                [
                    'titolo' => '🍂 Raccolta Foglie Autunnali',
                    'dettagli' => 'Raccogli regolarmente le foglie cadute. Lasciare troppe foglie a terra può soffocare il prato e creare muffe. Usa le foglie raccolte per creare ottimo compost!',
                    'img' => 'images/giardino/foglie.jpg'
                ],
                [
                    'titolo' => '💡 Illuminazione da Giardino',
                    'dettagli' => 'Installa luci solari lungo i vialetti. Le luci solari non solo sono ecologiche, ma aggiungono anche un tocco magico la sera, migliorando sicurezza ed estetica.',
                    'img' => 'images/giardino/illuminazione.jpg'
                ],
                [
                    'titolo' => '🏡 Creazione di Aree di Riposo',
                    'dettagli' => 'Crea piccoli angoli relax tra le piante. Panca in legno, amaca o una semplice sedia da giardino: ti permetteranno di goderti il verde e osservare da vicino la natura che hai coltivato.',
                    'img' => 'images/giardino/riposo.jpg'
                ],

                
            ];
        @endphp

        @foreach ($consigli as $consiglio)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-simple shadow-sm">
                    <img src="{{ $consiglio['img'] }}" alt="{{ $consiglio['titolo'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $consiglio['titolo'] }}</h5>
                        <p class="card-text">{{ $consiglio['dettagli'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

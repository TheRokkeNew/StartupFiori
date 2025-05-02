@extends('layouts.app')
@section('content')
<style>    
    /*importa dei font (Great Vibes,Lora) di Google Fonts per utilizzarli nella tua pagina web */
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;700&family=Lora:ital@0;1&display=swap');
    body {
        background-color: #F7CEAB; 
        margin: 10;
        padding: 10;
        font-family: 'Lora', serif;
        color: #6C4C3F;
    }
    @font-face {
        font-family: 'Brittany Signature';
        src: url('{{ asset('fonts/Matrimonio.ttf') }}') format('truetype');
    }
    h1 {
        font-family: 'Great Vibes', cursive;
        font-size: 3.5rem;
        color: #6C4C3F;
        margin-bottom: 0.5rem;
    }
    h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.8rem;
        font-weight: 600;
        color: #6C4C3F;
    }
    h5 {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 600;
        margin-top: 1rem;
        font-size: 1.4rem;
        color: #6C4C3F;
    }
    p {
        font-family: 'Lora', serif;
        font-size: 1.2rem;
        line-height: 1.6;
        font-style: italic;
        color:color: #6C4C3F;
    }
    .container {
        max-width: 800px;
    }
    .img-fluid {
        max-width: 70%; 
        height: auto; 
        border-radius: 12px;  
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    /*effetti*/
    .img-fluid.loaded {
        opacity: 1;
    }
    h1, h3, h5, p {
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    h1.loaded, h3.loaded, h5.loaded, p.loaded {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<div class="container text-center ">
    <h1>Matrimonio</h1>
    <p>Celebra il giorno più bello con i fiori perfetti!</p>
    <img src="{{ asset('images/occasione/matrimonio.jpg') }}" class="img-fluid" alt="Matrimonio">
    <h3 class="mt-3 mb-3">I nostri fiori per il tuo bouquet ideale</h3>
    <div class="row">
        <!--Peonia-->
        <div class="col-md-4 text-center  ">
            <a href="{{ route('flowers.show', ['id' => 17]) }}" class="text-decoration-none">
            <img src="{{ asset('images/occasione/fiori/peonia.jpg') }}" class="img-fluid rounded" alt="Peonia"></a>
            <h5>Peonia</h5>
            <p>Amore e prosperità per una vita insieme felice</p>
        </div>
        <!--Calla-->
        <div class="col-md-4 text-center  ">
            <a href="{{ route('flowers.show', ['id' => 75]) }}" class="text-decoration-none">
            <img src="{{ asset('images/occasione/fiori/calla.jpg') }}" class="img-fluid rounded" alt="Calla"></a>
            <h5>Calla</h5>
            <p>Bellezza e ammirazione per un'unione speciale</p>
        </div>
        <!--Queen of Sweden-->
        <div class="col-md-4 text-center  ">
            <a href="{{ route('flowers.show', ['id' => 76]) }}" class="text-decoration-none">
            <img src="{{ asset('images/occasione/fiori/queen_sweden.jpg') }}" class="img-fluid rounded" alt="Queen of Sweden "></a>
            <h5>Queen of Sweden </h5>
            <p>Magia ed eleganza per l'amore eterno</p>
        </div>        
    </div>
</div>

<!--effetti pagina-->
<script>
    //aspetta che il DOM sia completamente caricato prima di eseguire lo script
    document.addEventListener("DOMContentLoaded", () => {
        //seleziona tutte le immagini
        const images = document.querySelectorAll("img.img-fluid");
        //seleziona tutti gli elementi di testo
        const texts = document.querySelectorAll("h1, h3, h5, p");

        //aggiunge la classe "loaded" agli elementi
        const showElements = () => {
            images.forEach(img => img.classList.add("loaded"));
            texts.forEach(text => text.classList.add("loaded"));
        };

        //per ogni immagine trovata
        images.forEach(img => {
            //verifica se l'immagine è già stata caricata
            if (img.complete) {
                showElements(); //mostra subito gli elementi
            } else {
                //aspetta che l'immagine finisca di caricarsi
                img.onload = showElements;
            }
        });
    });
</script>
@endsection


@extends('layouts.app')
@section('content')
<style>
    /*importa dei font (Great Vibes,Lora) di Google Fonts per utilizzarli nella tua pagina web */
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;700&family=Lora:ital@0;1&display=swap');
    body {
        background-color: #F7CEAB; 
        margin: 10;
        padding: 10;
        overflow: hidden;
        font-family: 'Lora', serif;
        color: #6C4C3F;
    }
    @font-face {
        font-family: 'Brittany Signature';
        src: url('{{ asset('fonts/Funerale.ttf') }}') format('truetype');
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
        font-size: 1.2rem;
        color: #6C4C3F;
    }
    p {
        font-family: 'Lora', serif;
        font-size: 1.3rem;
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
<!--Contenitore principale-->
<div class="container text-center">
    <!-- Titolo della pagina -->
    <h1>Funerale</h1>
    <!-- Sottotitolo descrittivo -->
    <p>Un tributo floreale per onorare chi non c’è più</p>
    <img src="{{ asset('images/occasione/funerale.jpg') }}" class="img-fluid" alt="Funerale">
    <!-- Titolo della sezione fiori -->
    <h3 class="mt-3 mb-3">I nostri fiori per il tuo bouquet ideale</h3>
    <!-- Griglia Bootstrap a 3 colonne -->
    <div class="row">
        <!--Crisantemo-->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/crisantemo.jpg') }}" class="img-fluid rounded" alt="Crisantemo">
            <h5>Crisantemo</h5>            
        </div>
        <!--Garofano-->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/garofano.jpg') }}" class="img-fluid rounded" alt="Garofano">
            <h5>Garofano</h5>            
        </div>
        <!--Giglio bianco-->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/giglio_bianco.jpg') }}" class="img-fluid rounded" alt="Giglio bianco">
            <h5>Giglio bianco</h5>           
        </div>       
    </div>
</div>
<script>
    // Aspetta che il DOM sia completamente caricato prima di eseguire lo script
    document.addEventListener("DOMContentLoaded", () => {
        // Seleziona tutte le immagini con classe "img-fluid"
        const images = document.querySelectorAll("img.img-fluid");
        // Seleziona tutti gli elementi di testo (h1, h3, h5, p)
        const texts = document.querySelectorAll("h1, h3, h5, p");

        // Funzione che aggiunge la classe "loaded" agli elementi
        const showElements = () => {
            images.forEach(img => img.classList.add("loaded"));
            texts.forEach(text => text.classList.add("loaded"));
        };

        // Per ogni immagine trovata
        images.forEach(img => {
            // Verifica se l'immagine è già stata caricata (nella cache del browser)
            if (img.complete) {
                showElements(); // Se sì, mostra subito gli elementi
            } else {
                // Altrimenti, aspetta che l'immagine finisca di caricarsi
                img.onload = showElements;
            }
        });
    });
</script>
@endsection
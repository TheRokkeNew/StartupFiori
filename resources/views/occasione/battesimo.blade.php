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
        src: url('{{ asset('fonts/Battesimo.ttf') }}') format('truetype');
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

<div class="container text-center">
    <h1>Battesimo</h1>
    <p>Un dolce benvenuto alla vita con fiori delicati e puri!</p>
    <img src="{{ asset('images/occasione/battesimo.jpg') }}" class="img-fluid" alt="Battesimo">
    <h3 class="mt-3 mb-3">I nostri fiori per il tuo bouquet ideale</h3>
    <div class="row">
        <!--Gerbera-->
        <div class="col-md-4 text-center">
            <a href="{{ route('flowers.show', ['id' => 78]) }}" class="text-decoration-none">
            <img src="{{ asset('images/occasione/fiori/gerbera.jpg') }}" class="img-fluid rounded" alt="Gerbera"></a>
            <h5>Gerbera</h5>
            <p>Gioia pura nel nuovo viaggio della vita che inizia</p>
        </div>
        <!--Rosa bianca-->
        <div class="col-md-4 text-center">
            <a href="{{ route('flowers.show', ['id' => 4]) }}" class="text-decoration-none">
            <img src="{{ asset('images/occasione/fiori/rosa.jpg') }}" class="img-fluid rounded" alt="Rosa bianca"></a>
            <h5>Rosa bianca</h5>
            <p>Candore di un angelo per un amore eterno</p>
        </div>
        <!--Ranuncolo-->
        <div class="col-md-4 text-center">
            <a href="{{ route('flowers.show', ['id' => 68]) }}" class="text-decoration-none">
            <img src="{{ asset('images/occasione/fiori/ranuncolo.jpg') }}" class="img-fluid rounded" alt="Ranuncolo"></a> 
            <h5>Ranuncolo</h5>
            <p>Bellezza di un miracolo di una nuova esistenza</p>        
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
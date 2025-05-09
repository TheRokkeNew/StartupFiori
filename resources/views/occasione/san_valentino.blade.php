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
        src: url('{{ asset('fonts/SanValentino.ttf') }}') format('truetype');
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
    <h1>San Valentino</h1>
    <p>Dichiara il tuo amore con i fiori più romantici!</p>
    <img src="{{ asset('images/occasione/san_valentino.jpg') }}" class="img-fluid" alt="San Valentino">
    <h3 class="mt-3 mb-3">I nostri fiori per il tuo bouquet ideale</h3>
    <div class="row">   
        <!--Tulipano rosso-->     
        <div class="col-md-4 text-center">
            <a href="{{ route('flowers.show', ['id' => 7]) }}" class="text-decoration-none">
            <img src="{{ asset('images/occasione/fiori/tulipano_rosso.jpg') }}" class="img-fluid rounded" alt="Tulipano rosso"></a>
            <h5>Tulipano rosso</h5>
            <p>Amore che si svela in un petalo rosso</p>        
        </div>
        <!--Rosa rossa-->
        <div class="col-md-4 text-center">
            <a href="{{ route('flowers.show', ['id' => 1]) }}" class="text-decoration-none">
            <img src="{{ asset('images/occasione/fiori/rosa_rossa.jpg') }}" class="img-fluid rounded" alt="Rosa rossa"></a>
            <h5>Rosa rossa</h5>
            <p>Passione pura in ogni cuore di petalo</p>         
        </div>
        <!--Ranuncolo rosso-->
        <div class="col-md-4 text-center">
            <a href="{{ route('flowers.show', ['id' => 67]) }}" class="text-decoration-none">
            <img src="{{ asset('images/occasione/fiori/ranuncolo_rosso.jpg') }}" class="img-fluid rounded" alt="Ranuncolo rosso"></a>
            <h5>Ranuncolo rosso</h5>
            <p>Desiderio dolce che sboccia in silenzio</p>
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
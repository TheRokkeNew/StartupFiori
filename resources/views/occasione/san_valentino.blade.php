@extends('layouts.app')
@section('content')
<style>
    body {
        background-color: #F7CEAB; 
        margin: 10;
        padding: 10;
        overflow: hidden;
    }
    .container {
        max-width: 800px; 
    }
    .img-fluid {
        max-width: 70%; 
        height: auto; 
    }
</style>
<!--Contenitore principale-->
<div class="container text-center">
    <!-- Titolo della pagina -->
    <h1>San Valentino</h1>
    <!-- Sottotitolo descrittivo -->
    <p>Dichiara il tuo amore con i fiori più romantici!</p>
    <img src="{{ asset('images/occasione/san_valentino.jpg') }}" class="img-fluid" alt="San Valentino">
    <!-- Titolo della sezione fiori -->
    <h3 class="mt-3 mb-3">I nostri fiori per il tuo bouquet ideale</h3>
    <!-- Griglia Bootstrap a 3 colonne -->
    <div class="row">        
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/tulipano_rosso.jpg') }}" class="img-fluid rounded" alt="Tulipano rosso">
            <h5>Tulipano rosso</h5>
            <!--Descrizione floreale-->
            <p>Dichiarazione d'amore</p>
        </div>
        <!--Rosa rossa-->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/rosa_rossa.jpg') }}" class="img-fluid rounded" alt="Rosa rossa">
            <h5>Rosa rossa</h5>
            <!--Descrizione floreale-->
            <p>Amore e passione nel giorno degli innamorati</p>
        </div>
        <!--Ranuncolo rosso-->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/ranuncolo_rosso.jpg') }}" class="img-fluid rounded" alt="Ranuncolo rosso">
            <h5>Ranuncolo rosso</h5>
            <!--Descrizione floreale-->
            <p>Amore ardente e desiderio sincero</p>
        </div>
    </div>
</div>
@endsection
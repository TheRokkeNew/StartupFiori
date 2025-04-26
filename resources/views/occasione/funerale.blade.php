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
            <!--Descrizione floreale-->
            <p>Dolore e ricordo per una persona cara</p>
        </div>
        <!--Garofano-->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/garofano.jpg') }}" class="img-fluid rounded" alt="Garofano">
            <h5>Garofano</h5>
            <!--Descrizione floreale-->
            <p>Purezza e rispetto nel momento del lutto</p>
        </div>
        <!--Giglio bianco-->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/giglio_bianco.jpg') }}" class="img-fluid rounded" alt="Giglio bianco">
            <h5>Giglio bianco</h5>
            <!--Descrizione floreale-->
            <p>Speranza e purezza per l'anima che riposa in pace</p>
        </div>       
    </div>
</div>
@endsection
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
<div class="container text-center">
    <h1>Funerale</h1>
    <p>Un tributo floreale per onorare chi non c’è più</p>
    <img src="{{ asset('images/occasione/funerale.jpg') }}" class="img-fluid" alt="Funerale">
    <h3 class="mt-3 mb-3">I nostri fiori per il tuo bouquet ideale</h3>
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/crisantemo.jpg') }}" class="img-fluid rounded" alt="Crisantemo">
            <h5>Crisantemo</h5>
            <p>Dolore e ricordo per una persona cara</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/garofano.jpg') }}" class="img-fluid rounded" alt="Garofano">
            <h5>Garofano</h5>
            <p>Purezza e rispetto nel momento del lutto</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/giglio_bianco.jpg') }}" class="img-fluid rounded" alt="Giglio bianco">
            <h5>Giglio bianco</h5>
            <p>Speranza e purezza per l'anima che riposa in pace</p>
        </div>
       
    </div>
</div>
@endsection
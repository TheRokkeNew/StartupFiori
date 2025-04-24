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
    <h1>Battesimo</h1>
    <p>Un dolce benvenuto alla vita con fiori delicati e puri!</p>
    <img src="{{ asset('images/occasione/battesimo.jpg') }}" class="img-fluid" alt="Battesimo">
    <h3 class="mt-3 mb-3">I nostri fiori per il tuo bouquet ideale</h3>
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/gerbera.jpg') }}" class="img-fluid rounded" alt="Gerbera">
            <h5>Gerbera</h5>
            <p>Illumina il cammino con gioia</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/rosa.jpg') }}" class="img-fluid rounded" alt="Rosa bianca">
            <h5>Rosa bianca</h5>
            <p>Per un candido augurio</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/occasione/fiori/ranuncolo.jpg') }}" class="img-fluid rounded" alt="Ranuncolo">
            <h5>Ranuncolo</h5>
            <p>Dolce bellezza in arrivo</p>           
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<style>
    body {
        background-color: #F7CEAB;
        overflow: hidden;
    }
    .img-fluid {
        width: 750px; 
        height: 450px;       
    }
    .maps iframe {
        width: 250px;
        height: 150px;
        border: 0;
    }
    .img-small {
        width: 250px;
        height: 150px;
        object-fit: cover;
    }
    .object-fit-cover {
        object-fit: cover;
    }
</style>

<div class="container text-center">
    <h2 style="margin-top: -20px;">Giardinaggio</h2>
    <p>Scopri quanto può essere semplice far fiorire il tuo giardino: siamo qui per guidarti passo dopo passo!</p>    
    <img src="{{ asset('images/giardino/giardinaggio.jpg') }}" class="img-fluid" alt="Giardinaggio">

    <div class="d-flex justify-content-center mt-4 flex-wrap" style="gap: 250px;">
        <!--giardiniere più vicino-->
        <div class="text-center">
            <h6>Trova il giardiniere più vicino a me</h6>
            <div class="maps">
                
            </div>
        </div>

        <!--Calendario potatura-->
        <div class="text-center">
            <h6>Consigli per la potatura</h6>
            <a href="{{ route('potatura') }}" class="text-decoration-none">
                <div class="card border-dark text-center" style="width: 250px; height: 150px; overflow: hidden;">                
                    <div class="card-header bg-white p-1">
                        <h6>Scegli il periodo migliore per la potatura di piante e di alberi!</h6>
                    </div>
                    <img src="{{ asset('images/giardino/potatura.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Potatura">
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
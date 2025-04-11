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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d362123.44626421743!2d11.020247289062509!3d44.840112200000036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477e4fe9e4c5c733%3A0xbda39b9e4206987!2sGiardineria!5e0!3m2!1sit!2sit!4v1744215924449!5m2!1sit!2sit" allowfullscreen loading="lazy"></iframe>
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
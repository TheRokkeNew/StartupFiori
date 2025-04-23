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
    .bg-classic{
        background-color:rgb(248, 112, 189);   
    }
    .text-classic{
        color: rgb(248, 112, 189);
    }
</style>
<div class="container text-center">
    <h1 ><u class="text-classic">Matrimonio</u></h1>
    <p>Celebra il giorno più bello con i fiori perfetti!</p>
    <img src="{{ asset('images/occasione/matrimonio.jpg') }}" class="img-fluid" alt="Matrimonio">
    <h3 class="mt-5 mb-2">I nostri fiori per il tuo bouquet ideale</h3>
    <p></p>
    <div class="row">
        <div class="col-md-4 text-center  ">
            <img src="{{ asset('images/occasione/fiori/peonia.jpg') }}" class="img-fluid rounded" alt="Peonia">
            <h5>Peonia</h5>
            <p>Amore e prosperità per una vita insieme felice</p>
        </div>
        <div class="col-md-4 text-center  ">
            <img src="{{ asset('images/occasione/fiori/calla.jpg') }}" class="img-fluid rounded" alt="Calla">
            <h5>Calla</h5>
            <p>Bellezza e ammirazione per un'unione speciale</p>
        </div>
        <div class="col-md-4 text-center  ">
            <img src="{{ asset('images/occasione/fiori/queen_sweden.jpg') }}" class="img-fluid rounded" alt="Queen of Sweden ">
            <h5>Queen of Sweden </h5>
            <p>Grazia ed eleganza per un matrimonio indimenticabile</p>
        </div>        
    </div>
</div>
@endsection
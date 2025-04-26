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
<div class="container text-center ">
    <!-- Titolo della pagina -->
    <h1>Matrimonio</h1>
    <!-- Sottotitolo descrittivo -->
    <p>Celebra il giorno più bello con i fiori perfetti!</p>
    <img src="{{ asset('images/occasione/matrimonio.jpg') }}" class="img-fluid" alt="Matrimonio">
    <!-- Titolo della sezione fiori -->
    <h3 class="mt-3 mb-3">I nostri fiori per il tuo bouquet ideale</h3>
    <!-- Griglia Bootstrap a 3 colonne -->
    <div class="row">
        <!--Peonia-->
        <div class="col-md-4 text-center  ">
            <img src="{{ asset('images/occasione/fiori/peonia.jpg') }}" class="img-fluid rounded" alt="Peonia">
            <h5>Peonia</h5>
            <!--Descrizione floreale-->
            <p>Amore e prosperità per una vita insieme felice</p>
        </div>
        <!--Calla-->
        <div class="col-md-4 text-center  ">
            <img src="{{ asset('images/occasione/fiori/calla.jpg') }}" class="img-fluid rounded" alt="Calla">
            <h5>Calla</h5>
            <!--Descrizione floreale-->
            <p>Bellezza e ammirazione per un'unione speciale</p>
        </div>
        <!--Queen of Sweden-->
        <div class="col-md-4 text-center  ">
            <img src="{{ asset('images/occasione/fiori/queen_sweden.jpg') }}" class="img-fluid rounded" alt="Queen of Sweden ">
            <h5>Queen of Sweden </h5>
            <!--Descrizione floreale-->
            <p>Grazia ed eleganza per un matrimonio indimenticabile</p>
        </div>        
    </div>
</div>
@endsection
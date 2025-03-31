@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset($flower->image) }}" class="img-fluid rounded shadow-lg" alt="{{ $flower->name }}">
        </div>
        <div class="col-md-6">
            <h1 class="display-4">{{ $flower->name }}</h1>
            <p class="lead"><strong>Colore:</strong> {{ $flower->color }}</p>
            <p class="lead"><strong>Stagione:</strong> {{ $flower->season }}</p>
            <p class="lead"><strong>Tipo:</strong> {{ $flower->type }}</p>
            
            <!-- Usa un URL dinamico per tornare alla pagina corrente del catalogo -->
            <a href="javascript:void(0);" class="btn btn-primary mt-3" id="backToCatalogButton">Torna al Catalogo</a>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.getElementById('backToCatalogButton').onclick = function() {
        window.history.back();  // Torna alla pagina precedente (catalogo)
    };
</script>
@endsection

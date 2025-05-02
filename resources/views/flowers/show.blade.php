@extends('layouts.app')
@section('content')
<style>
    body {
        background-color: #fff0f5;
    }
    .btn-success {
        background-color: #ff69b4;
        border-color: #ff69b4;
    }
    .btn-success:hover {
        background-color: #ff1493;
        border-color: #ff1493;
    }
    .flower-wrapper {
        display: flex;
        justify-content: center;
    }
    .flower-details {
        background-color: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 700px;
        width: 100%;
        position: relative;
    }
    .flower-image {
        position: absolute;
        top: 2rem;
        right: 2rem;
        height: 250px;
        width: 250px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    .flower-info {
        margin-bottom: 1.5rem;
    }
    .flower-info p {
        margin-bottom: 0.5rem;
        font-size: 1.1rem;
    }
    .section-title {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: #333;
    }
    h1.display-4 {
        margin-bottom: 2rem;
    }
</style>

<div class="container mt-5 flower-wrapper">
    <div class="flower-details">
        <img src="{{ asset($flower->image) }}" alt="{{ $flower->name }}" class="flower-image">
        <h1 class="display-4">{{ $flower->name }}</h1>

        <div class="flower-info">
            <p class="lead"><strong>Colore:</strong> {{ $flower->color }}</p>
            <p class="lead"><strong>Stagione:</strong> {{ $flower->season }}</p>
            <p class="lead"><strong>Tipo:</strong> {{ $flower->type }}</p>
        </div>

        <div class="flower-info">
            <h2 class="section-title">Descrizione</h2>
            <p>{{ $flower->description ?? 'Descrizione non disponibile' }}</p>
        </div>

        <div class="flower-info">
            <h2 class="section-title">Cura del fiore</h2>
            <p><strong>☀️ Sole:</strong> {{ $flower->care_sun ?? 'Non specificato' }}</p>
            <p><strong>💧 Acqua:</strong> {{ $flower->care_water ?? 'Non specificato' }}</p>
            <p><strong>🌱 Terreno:</strong> {{ $flower->care_soil ?? 'Non specificato' }}</p>
        </div>

        <a href="javascript:history.back()" class="btn btn-success w-100 mt-4">Torna indietro</a>
    </div>
</div>

<!--script per gestire pulsante torna al catalogo-->
<script type="text/javascript">
    document.getElementById('backToCatalogButton').onclick = function() {
        window.history.back();  // Torna alla pagina precedente
    };
</script>
@endsection

@extends('layouts.app')

@section('content')
<style>
  body {
    background-color:rgb(250, 202, 210);
  }
</style>
<div class="container mt-5">
  <h2 class="text-center mb-4">✏️ Modifica Fiore: {{ $flower->name }}</h2>

  <form action="{{ route('flowers.update', $flower->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="name" class="form-label">Nome Fiore</label>
      <input type="text" name="name" class="form-control" value="{{ $flower->name }}" required>
    </div>

    <div class="mb-3">
      <label for="color" class="form-label">Colore</label>
      <select name="color" class="form-select" required>
        <option value="Rosso" {{ $flower->color == 'Rosso' ? 'selected' : '' }}>Rosso</option>
        <option value="Blu" {{ $flower->color == 'Blu' ? 'selected' : '' }}>Blu</option>
        <option value="Giallo" {{ $flower->color == 'Giallo' ? 'selected' : '' }}>Giallo</option>
        <option value="Bianco" {{ $flower->color == 'Bianco' ? 'selected' : '' }}>Bianco</option>
        <option value="Viola" {{ $flower->color == 'Viola' ? 'selected' : '' }}>Viola</option>
        <option value="Rosa" {{ $flower->color == 'Rosa' ? 'selected' : '' }}>Rosa</option>
        <option value="Arancione" {{ $flower->color == 'Arancione' ? 'selected' : '' }}>Arancione</option>
        <option value="Azzurro" {{ $flower->color == 'Azzurro' ? 'selected' : '' }}>Azzurro</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="season" class="form-label">Stagione</label>
      <select name="season" class="form-select" required>
        <option value="Primavera" {{ $flower->season == 'Primavera' ? 'selected' : '' }}>Primavera</option>
        <option value="Estate" {{ $flower->season == 'Estate' ? 'selected' : '' }}>Estate</option>
        <option value="Autunno" {{ $flower->season == 'Autunno' ? 'selected' : '' }}>Autunno</option>
        <option value="Inverno" {{ $flower->season == 'Inverno' ? 'selected' : '' }}>Inverno</option>
        <option value="Primavera-Estate" {{ $flower->season == 'Primavera-Estate' ? 'selected' : '' }}>Primavera-Estate</option>
        <option value="Estate-Autunno" {{ $flower->season == 'Estate-Autunno' ? 'selected' : '' }}>Estate-Autunno</option>
        <option value="Inverno-Primavera" {{ $flower->season == 'Inverno-Primavera' ? 'selected' : '' }}>Inverno-Primavera</option>
        <option value="Annuale" {{ $flower->season == 'Annuale' ? 'selected' : '' }}>Annuale</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="type" class="form-label">Tipo</label>
      <select name="type" class="form-select" required>
        <option value="Perenne" {{ $flower->type == 'Perenne' ? 'selected' : '' }}>Perenne</option>
        <option value="Annuale" {{ $flower->type == 'Annuale' ? 'selected' : '' }}>Annuale</option>
        <option value="Bulbosa" {{ $flower->type == 'Bulbosa' ? 'selected' : '' }}>Bulbosa</option>
        <option value="Arbustiva" {{ $flower->type == 'Arbustiva' ? 'selected' : '' }}>Arbustiva</option>
        <option value="Epifita" {{ $flower->type == 'Epifita' ? 'selected' : '' }}>Epifita</option>
        <option value="Rizomatoso" {{ $flower->type == 'Rizomatoso' ? 'selected' : '' }}>Rizomatoso</option>
        <option value="Biennale" {{ $flower->type == 'Biennale' ? 'selected' : '' }}>Biennale</option>
        <option value="Rampicante" {{ $flower->type == 'Rampicante' ? 'selected' : '' }}>Rampicante</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">💾 Aggiorna Fiore</button>
    <a href="{{ route('flowers.index') }}" class="btn btn-secondary ms-2">↩️ Indietro</a>
  </form>
</div>
@endsection
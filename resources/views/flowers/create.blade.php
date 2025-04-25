@extends('layouts.app')

@section('content')
<style>
  body {
    background-color:rgb(250, 202, 210);
  }
</style>
<div class="container mt-5">
  <h2 class="text-center mb-4">➕ Aggiungi un nuovo fiore</h2>

  <form action="{{ route('flowers.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Nome Fiore</label>
      <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="color" class="form-label">Colore</label>
      <select name="color" class="form-select" required>
        <option value="Rosso">Rosso</option>
        <option value="Blu">Blu</option>
        <option value="Giallo">Giallo</option>
        <option value="Bianco">Bianco</option>
        <option value="Viola">Viola</option>
        <option value="Rosa">Rosa</option>
        <option value="Arancione">Arancione</option>
        <option value="Azzurro">Azzurro</option>  
      </select>
    </div>

    <div class="mb-3">
      <label for="season" class="form-label">Stagione</label>
      <select name="season" class="form-select" required>
        <option value="Primavera">Primavera</option>
        <option value="Estate">Estate</option>
        <option value="Autunno">Autunno</option>
        <option value="Inverno">Inverno</option>
        <option value="Primavera-Estate">Primavera-Estate</option>
        <option value="Estate-Autunno">Estate-Autunno</option>
        <option value="Inverno-Primavera">Inverno-Primavera</option>
        <option value="Annuale">Annuale</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="type" class="form-label">Tipo</label>
      <select name="type" class="form-select" required>
        <option value="Perenne">Perenne</option>
        <option value="Annuale">Annuale</option>
        <option value="Bulbosa">Bulbosa</option>
        <option value="Arbustiva">Arbustiva</option>
        <option value="Epifita">Epifita</option>
        <option value="Rizomatoso">Rizomatoso</option> 
        <option value="Biennale">Biennale</option> 
        <option value="Rampicante">Rampicante</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Immagine</label>
      <input type="file" name="image" class="form-control" accept="image/*" required>
    </div>

    <button type="submit" class="btn btn-success">💾 Salva Fiore</button>
    <a href="{{ route('flowers.index') }}" class="btn btn-secondary ms-2">↩️ Indietro</a>
  </form> 
</div>
@endsection

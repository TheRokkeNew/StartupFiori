@extends('layouts.app') <!-- Estende il layout di base -->

@section('title', 'Login') <!-- Imposta il titolo della pagina -->

@section('content') <!-- Inizia la sezione del contenuto -->
<style>
    body{
      background-color:rgba(247, 207, 171, 0.55);
  }
  .bg-classic{
    background-color:rgb(248, 112, 189);
  }
</style>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow">
        <div class="card-header text-white text-center bg-classic" >
          <h3>Accedi</h3>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf <!-- Token CSRF per la sicurezza -->
            
            <!-- Campo Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- Campo Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <!-- Checkbox "Ricordami" -->
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="remember" name="remember">
              <label class="form-check-label" for="remember">Ricordami</label>
            </div>

            <!-- Pulsante di Accesso -->
            <div class="d-grid ">
              <button type="submit" class="btn bg-classic">Accedi</button>
            </div>

            <!-- Link per la Registrazione -->
            <div class="text-center mt-3">
              <p>Non hai un account? <a href="{{ route('register') }}">Registrati qui</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection <!-- Fine della sezione del contenuto -->
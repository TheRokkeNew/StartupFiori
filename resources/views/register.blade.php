@extends('layouts.app') <!-- Estende il layout di base -->

@section('title', 'Registrazione') <!-- Imposta il titolo della pagina -->

@section('content') <!-- Inizia la sezione del contenuto -->
<style>
    body{
    background-color: #F7CEAB;
  }
  .bg-classic{
    background-color:rgb(248, 112, 189);
  }
</style>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow">
        <div class="card-header bg-classic text-white text-center">
          <h3>Registrati</h3>
        </div>
        <div class="card-body">
          <form method="post" action="{{ route('registerUser') }}">
            @csrf <!-- Token CSRF per la sicurezza -->
            
          @if (session('success'))
            <div class="class alert-success">
              {{session('success')}}
            </div>
          @endif

          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>

          @endif

            <!-- Campo Nome -->
            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>

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

            <!-- Campo Conferma Password -->
            <div class="mb-3">
              <label for="password_confirmation" class="form-label">Conferma Password</label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="mb-3">
              <form action="{{route('upload.image') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="profile_image">Carica la tua immagine:</label>
                <input type="file" name="profile_image" id="profile_image" required>
                <div class="d-grid"><button type="submit" class="btn bg-classic">Registrati e carica Immagine</button></div>
              </form>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection <!-- Fine della sezione del contenuto -->
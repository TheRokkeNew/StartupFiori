<!DOCTYPE html>
<html lang="it">
<style>
  .navbar {
    padding-top: 5px;  
    padding-bottom: 5px; 
    height: 50px;
  }
</style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Occasione')</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="">
        <!-- <img src="{{ asset('images/logo.png') }}" alt="Logo" width="100"> -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          @auth
          <li class="nav-item">
            <form action="{{route('logoutUser')}}" method="post">
              @csrf
              <button type="submit" class="btn">Logout</button>
            </form>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenuto Principale -->
  <main class="py-4">
    @yield('content') <!-- Qui viene inserito il contenuto delle view -->
  </main>

  <!-- Footer -->
  <!--<footer class="py-4 bg-light">
    <div class="container text-center">
      <p class="mb-0">© 2025 Startup Fiori - Tutti i diritti riservati.</p>
    </div>
  </footer>-->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
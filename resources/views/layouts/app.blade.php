<!DOCTYPE html>
<html lang="it">
<style>
  .navbar {
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 10px 20px;
  }
  .bg-classic{
    background-color:rgb(248, 112, 189);
  }
</style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'FlowerFormula')</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <!-- Navbar fissa -->
  <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FlowerFormula</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/catalogo') }}">Catalogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/occasione/matrimonio') }}">Matrimonio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/occasione/funerale') }}">Funerale</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/occasione/battesimo') }}">Battesimo</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/occasione/san_valentino') }}">San Valentino</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/giardinaggio ') }}">Giardinaggio</a></li>

                    @auth
                    <li class="nav-item">
                        <a href="{{route('showUserProfile')}}" class="nav-link">
                            <?php
                            $user = Auth::user();
                            print("Ciao ".$user->name);
                            ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('showUserProfile')}}" class="nav-link">
                        @if(Auth::user()->profile_image)
                        <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" class="rounded-circle" style="width: 25px; height: 25px; object-fit: cover; border-radius: 50%;" alt="Avatar">
                        @endif
                        </a>
                    </li>

                    <li class="nav-item">
                    <form action="{{route('logoutUser')}}" method="post">
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                    </form>
                    </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">LOGIN</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">REGISTER</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

  <!-- Contenuto Principale -->
  <main class="py-4">
    @yield('content') <!-- Qui viene inserito il contenuto delle view -->
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
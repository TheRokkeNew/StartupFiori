<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fioreria</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    
    <!-- GSAP Scripts animazioni JS -->
    <script src="{{ asset('js/libs/gsap/gsap.min.js') }}" defer></script>
    <script src="{{ asset('js/libs/gsap/ScrollTrigger.min.js') }}" defer></script>
    <script src="{{ asset('js/libs/gsap/ScrollSmoother.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        :root {
            --index: calc(1vw + 1vh);
            --color-header: #000000;
            --color-text: #000000;
            --gallery-gap: calc(var(--index) * 7.5)
        }
        /* will-change */
        .content, .hero, .main-header, .gallery > * {
            will-change: transform;
        }
        body {
            background-color:#f7ceab;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .navbar {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px 20px;
        }
        .wrapper {
            overflow: hidden;
        }
        .content {
            margin-top: 10px;
            padding-bottom: 60px;
        }
        .hero {
            width: calc(var(--index) * 36);
            position: absolute;
            left: 25vw;
            top: -10vh;
            z-index: -1;
        }
        .main-header {
            height: 100vh;
        }
        .container {
            padding: 0 7vw;
        }
        .main-title {
            font-size: calc(var(--index) * 8);
            position: absolute;
            width: min-content;
            bottom: 12vh;
            line-height: .9;
        }
        .gallery {
            display: flex;
            padding: calc(var(--index) * 10) 0;
        }
        .gallery > * {
            flex: 1;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        .gallery__item {
            max-width: calc(var(--index) * 21);
            margin-bottom: var(--gallery-gap);
            max-height: 70vh;
            border-radius: 10px;
        }
        .gallery__left {
            margin-top: calc(var(--gallery-gap) * 2.2);
        }
        .gallery__right .gallery__item {
            margin: 0;
            margin-top: calc(var(--gallery-gap) * 1.7);
        }
        .text-block {
            color: var(--color-text);
            position: relative;
        }
        .text-block__h {
            font-size: 2rem;
            line-height: 2.4rem;
            color: var(--color-header);
            margin-bottom: 1.0rem;
        }
        .text-block__p {
            line-height: 1.75;
        }
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .social-icons a {
            margin: 0 10px;
            color: white;
            font-size: 1.5rem;
        }
    </style>
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
    
    <div class="wrapper">
        <div class="content">
            <header class="hero-section">
				<img data-speed=".6" class="hero" src="{{ URL('images/LOGO.png') }}" alt="Alt" >
			</header>
            
            <div class="container">
                <main class="gallery row">
                    <div data-speed=".9" class="gallery__left col-md-6">

                        <a href="{{ url('/occasione/matrimonio') }}">
                            <img class="gallery__item" src="{{ URL('images/work/matrimonio.jpg') }}" alt="Alt">
                        </a>

                        <div class="text-block gallery__item">
                            <h2 class="text-block__h">UN OMAGGIO DI PACE E SERENITÀ!</h2>
                            <p class="text-block__p">Onora la memoria di una persona speciale con un bouquet che esprime rispetto e amore</p>
                        </div>

                        <a href="{{ url('/occasione/battesimo') }}">
                            <img class="gallery__item" src="{{ URL('images/work/battesimo.jpg') }}" alt="Alt">
                        </a>

                        <div class="text-block gallery__item">
                            <h2 class="text-block__h">FIORI CHE PARLANO D'AMORE!</h2>
                            <p class="text-block__p">Un gesto romantico per San Valentino: fiori che riscaldano il cuore</p>
                        </div>

                        <a href="{{ url('/giardinaggio ') }}">
                            <img class="gallery__item" src="{{ URL('images/work/giardinaggio.jpg') }}" alt="Alt">
                        </a>
                    </div>

                    <div data-speed="1.1" class="gallery__right col-md-6">

                        <div class="text-block gallery__item">
                            <h2 class="text-block__h">UN BOUQUET DI FELICITÀ PER LA VOSTRA VITA INSIEME!</h2>
                            <p class="text-block__p">Ogni fiore racconta la storia del vostro amore: trova il bouquet perfetto per il vostro matrimonio</p>
                        </div>

                        <a href="{{ url('/occasione/funerale') }}">
                            <img class="gallery__item" src="{{ URL('images/work/funerale.jpg') }}" alt="Alt">
                        </a>
                        <div class="text-block gallery__item">
                            <h2 class="text-block__h">UN DONO PROFUMATO PER UN PICCOLO ANGELO!</h2>
                            <p class="text-block__p">Celebra la nuova vita con un bouquet che simboleggia purezza e gioia</p>
                        </div>

                        <a href="{{ url('/occasione/san_valentino') }}">
                            <img class="gallery__item" src="{{ URL('images/work/sanvalentino.jpg') }}" alt="Alt">
                        </a>

                        <div class="text-block gallery__item">
                            <h2 class="text-block__h">CURA DEL VERDE: TUTTO QUELLO CHE TI SERVE</h2>
                            <p class="text-block__p">La potatura giusta al momento giusto fa la differenza: ecco i nostri consigli!</p>
                        </div>
                    
                    </div>
                </main>
            </div>
        </div>
    </div>
    
    <!-- Footer fisso -->
    <footer class="footer">
        <p>&copy; 2025 FlowerFormula - Tutti i diritti riservati</p>
        <div class="social-icons">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
        </div>
    </footer>
</body>
</html>

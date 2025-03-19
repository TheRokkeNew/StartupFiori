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
            background-color: #F7CEAB;
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
            left: 30vw;
            top: 22vh;
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
            <a class="navbar-brand" href="#">Startup Fiori</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Catalogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Matrimonio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Funerale</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Battesimo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">San Valentino</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Giardinaggio</a></li>

                    @auth
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <?php
                            $user = Auth::user();
                            print("Ciao ".$user->name);
                            ?>
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
				<img data-speed=".6" class="hero" src="{{ URL('images/bouquet.png') }}" alt="Alt" >
				<div class="container">
					<div data-speed=".75" class="main-header">
						<h1 class="main-title">Startup Fiori</h1>
					</div>
				</div>
			</header>
            
            <div class="container">
                <main class="gallery row">
                    <div data-speed=".9" class="gallery__left col-md-6">

                        <a href="#">
                            <img class="gallery__item" src="{{ URL('images/work/matrimonio.jpg') }}" alt="Alt">
                        </a>

                        <div class="text-block gallery__item">
                            <h2 class="text-block__h">SCEGLI I FIORI CHE SI ABBINANO DI PIU' AL TUO SOGNO</h2>
                            <p class="text-block__p">Abbiamo un quantità industriale di fiori per te e per le tue nozze!</p>
                        </div>

                        <a href="#">
                            <img class="gallery__item" src="{{ URL('images/work/battesimo.jpg') }}" alt="Alt">
                        </a>

                        <div class="text-block gallery__item">
                            <h2 class="text-block__h">SCEGLI I FIORI CHE SI ABBINANO DI PIU' AL TUO SOGNO</h2>
                            <p class="text-block__p">Abbiamo un quantità industriale di fiori per te e per le tue nozze!</p>
                        </div>

                        <a href="#">
                            <img class="gallery__item" src="{{ URL('images/work/giardinaggio.jpg') }}" alt="Alt">
                        </a>
                    </div>

                    <div data-speed="1.1" class="gallery__right col-md-6">

                        <div class="text-block gallery__item">
                            <h2 class="text-block__h">SCEGLI I FIORI CHE SI ABBINANO DI PIU' AL TUO SOGNO</h2>
                            <p class="text-block__p">Abbiamo un quantità industriale di fiori per te e per le tue nozze!</p>
                        </div>

                        <a href="#">
                            <img class="gallery__item" src="{{ URL('images/work/funerale.jpg') }}" alt="Alt">
                        </a>
                        <div class="text-block gallery__item">
                            <h2 class="text-block__h">SCEGLI I FIORI CHE SI ABBINANO DI PIU' AL TUO SOGNO</h2>
                            <p class="text-block__p">Abbiamo un quantità industriale di fiori per te e per le tue nozze!</p>
                        </div>

                        <a href="#">
                            <img class="gallery__item" src="{{ URL('images/work/sanvalentino.jpg') }}" alt="Alt">
                        </a>

                        <div class="text-block gallery__item">
                            <h2 class="text-block__h">SCEGLI I FIORI CHE SI ABBINANO DI PIU' AL TUO SOGNO</h2>
                            <p class="text-block__p">Abbiamo un quantità industriale di fiori per te e per le tue nozze!</p>
                        </div>
                    
                    </div>
                </main>
            </div>
        </div>
    </div>
    
    <!-- Footer fisso -->
    <footer class="footer">
        <p>&copy; 2025 Startup Fiori - Tutti i diritti riservati</p>
        <div class="social-icons">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
        </div>
    </footer>
</body>
</html>

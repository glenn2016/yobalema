<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Propos</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
</head>
<body>
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block" >
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+221 77 112 5147</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href="https://emmanuelnzaou@gmail.com"><i class="fa fa-envelope mr-2"></i>emmanuelnzaou@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="https://www.facebook.com/profile.php?id=100007521786821&mibextid=LQQJ4d">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="https://twitter.com/manudd9/">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="https://instagram.com/cantguardenz?igshid=YmMyMTA2M2Y=">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0" id="top">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="/" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">YOBALEMA </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/" class="nav-item nav-link">Accueil</a>
                        <a href="/Apropos" class="nav-item nav-link active">A propos</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Passagers</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="car.html" class="dropdown-item">Comment ça marche</a>
                                <a href="detail.html" class="dropdown-item">Nos prix & engagements</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Chauffeurs</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="team.html" class="dropdown-item">Comment ça marche</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            @if (Route::has('login'))
                                @auth
                                <a href="/creationCompte" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="/profile" class="dropdown-item">Profile</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </div>
                                @else
                                <a href="/creationCompte" class="nav-link dropdown-toggle" data-toggle="dropdown">INSCRIPTION</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="/CreationCompteClient" class="dropdown-item">Compte passage</a>
                                    <a href="/CreationCompteChauffeur" class="dropdown-item">Compte chauffeur</a>
                                    <a href="team.html" class="dropdown-item">Compte Business</a>
                                </div>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <section class="showcase" style="background-color:rgb(239, 238, 238);">
        <div class="container p-0">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2 class="row-title" style="color:#F77D0A;">A propos de YOBALEMA
.</h2>
            <br>
            <br>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/img/taxi-4048056_1920.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Le meilleur choix de transport
                        pour une agréable journée.</h2>
                        <br>
                    <p class="lead mb-0" style="color:black;">YOBALEMA
 est le service VTC à la demande qui
                        vous accompagnera en toute sécurité dans
                        tous vos déplacements locaux.</p>
                    <br>
                    <br>
                    <p class="lead mb-0" style="color:black;">Via l’application YOBALEMA
 vous pourrez
                        commander votre chauffeur et vous déplacer
                        vers la destination de votre choix en indiquant
                        simplement la géolocalisation de votre
                        destination finale.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Nous Contacter</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>Ouakam, Dakar, Sénégal</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+221 77 112 5147</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>emmanuelnzaou@gmail.com</p>
                <h6 class="text-uppercase text-white py-2">Suivez Nous</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="https://twitter.com/manudd9/"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="https://www.facebook.com/profile.php?id=100007521786821&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="https://instagram.com/cantguardenz?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Liens Vers</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Politique de confidentialité</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Conditions</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Inscription de nouveau membre</a>
                    <a class="text-body" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Aide & FAQ</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Inscrivez-Vous</h4>
                <p class="mb-4">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="Votre Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; <a href="/">YOBALEMA </a>. All Rights Reserved.</p>
        <p class="m-0 text-center text-body">Designed by <a href="https://htmlcodex.com">Perrin Emmanuel NZAOU</a></p>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/scrolling-nav.js"></script>
    <script src="/js/validator.js"></script>
    <script src="/js/jquery.min.js"></script>
</body>
</html>

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Authentification</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href={{ asset('vendor/fontawesome-free/css/all.min.css') }} type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href={{ asset('css/sb-admin-2.min.css') }}>

</head>

<body class="" style="background-color: #2B2E4A;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="font-weight: 600;">Veuillez vous indentifier</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Entrer votre adresse email...">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <input  id="password" type="password" name="password" required autocomplete="current-password" class="form-control form-control-user" placeholder="Mot de passe">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Se souvenir
                                                    de moi</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" style =" background-color:#F77D0A; border:#F77D0A; font-weight: 600; border-radius:20px;">Se Connecter</button>
                                        <hr>
                                        <a href="/auth/google/redirect" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Se connecter avec Google
                                        </a>
                                        <a href="#" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Se connecter avec Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                        <a class="small" href="{{ route('password.request') }}">{{ __('Mot de passe oublié?') }}</a>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">{{ __('créer un compte') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

</body>

</html>

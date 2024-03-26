<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Récupération de compte</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css" />
    <!-- Custom fonts for this template-->
    <link href={{ asset('vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{ asset('css/sb-admin-2.min.css') }} rel="stylesheet">
    <link rel="stylesheet" href={{ asset('intl-tel-input-17.0.19/src/css/intlTelInput.scss') }}>

</head>

<body class="" style="background-color: #2B2E4A;">
    <br>
    <br>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-choix-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2" style="font-weight: 600;">Vous êtes ?</h1>
                                        <p class="mb-4">Quel type de compte voulez-vous créer</p>
                                    </div>
                                        <button id="compte-client" class="btn btn-primary btn-user btn-block" style="background-color:#2B2E4A; border:#2B2E4A; font-weight: 600;">
                                            Passager
                                        </button>
                                        <button id="compte-chauffeur" class="btn btn-primary btn-user btn-block" style="background-color:#F77D0A; border:#F77D0A; font-weight: 600;">
                                            Chauffeur
                                        </button>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/Authentification">Vous avez déjà un compte? Se connecter!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <br>
    <div class="container" id="formulaire">

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="intl-tel-input-17.0.19/src/js/intlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="js/forms.js"></script>
</body>

</html>

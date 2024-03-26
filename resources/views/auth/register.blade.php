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
    <link rel="stylesheet" href={{ asset('csss/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('csss/dataTables.bootstrap4.css') }}>

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
                                        <a href="#passager" id="" class="btn btn-primary btn-user btn-block" data-toggle = "modal" style="background-color:#2B2E4A; border:#2B2E4A; font-weight: 600;">
                                            Passager
                                        </a>
                                        <a href="#chauffeur" id="" class="btn btn-primary btn-user btn-block" data-toggle = "modal" style="background-color:#F77D0A; border:#F77D0A; font-weight: 600;">
                                            Chauffeur
                                        </a>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/login">Vous avez déjà un compte? Se connecter!</a>
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
    <div class="modal fade " id="passager" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title text-white " id="exampleModalLabel">Compte Passager</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
                <span aria-hidden="true" style="color:white;">&times;</span>
              </button>
            </div>
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                      <div class="col-lg-5 d-none d-lg-block bg-client-image"></div>
                      <div class="col-lg-7">
                          <div class="p-5">
                              <div class="text-center">
                                  <h1 class="h4 text-gray-900 mb-4" style="font-weight: 600;">Inscription</h1>
                              </div>
                              <form method="POST" action="{{ route('register') }}">
                                @csrf
                                  <div class="form-group row">
                                      <div class="col-sm-6 mb-3 mb-sm-0">
                                          <input id="name" type="text" name="name" class="form-control form-control-user"
                                              placeholder="Votre Nom..."  required autofocus autocomplete="name">
                                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                      </div>
                                      <div class="col-sm-6">
                                          <input type="text" name="prenom" class="form-control form-control-user" id="prenom"
                                              placeholder="Votre Prénom..."  required autofocus autocomplete="prenom">
                                          <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <input type="email" name="email" class="form-control form-control-user" id="email"
                                          placeholder="Votre Adresse mail..."  required autocomplete="username">
                                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                  </div>
                                  <div class="form-group">
                                      <input type="tel" name="telephone" class="form-control form-control-user" id="telephone"
                                          placeholder="Téléphone..."  required autofocus autocomplete="telephone">
                                      <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-sm-6 mb-3 mb-sm-0">
                                          <input type="password" name="password" class="form-control form-control-user"
                                          id="password" placeholder="Mot de passe" required autocomplete="new-password">
                                          <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                      </div>
                                      <div class="col-sm-6">
                                          <input type="password" name="password_confirmation" class="form-control form-control-user"
                                          id="password_confirmation" placeholder="Confirmez le mot de passe" required autocomplete="new-password">
                                          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                      </div>
                                  </div>
                                  @foreach ($roles as $role)
                                  @if ( $role['nom']  == "passager")
                                    <div class="form-group">
                                        <input type="number" name="roles" class="form-control form-control-user" id="role" value="{{ $role['id'] }}" hidden>
                                    </div>
                                  @endif
                                    @endforeach
                                  <button type="submit" class="btn btn-primary btn-user btn-block" style =" background-color:#F77D0A; border:#F77D0A; font-weight: 600; border-radius:20px;">Créer le compte</button>
                                  <hr>
                                  <a href="index.html" style="border-radius:20px;" class="btn btn-google btn-user btn-block">
                                      <i class="fab fa-google fa-fw"></i> Se connecter avec Google
                                  </a>
                                  <a href="index.html" style="border-radius:20px;" class="btn btn-facebook btn-user btn-block">
                                      <i class="fab fa-facebook-f fa-fw"></i> Se connecter avec Facebook
                                  </a>
                              </form>
                              <hr>
                              <div class="text-center">
                                  <a class="small" href="/motDePasseOublie">Mot de passe oublié</a>
                              </div>
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
      <div class="modal fade " id="chauffeur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title text-white " id="exampleModalLabel">Compte Chauffeur</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
                <span aria-hidden="true" style="color:white;">&times;</span>
              </button>
            </div>
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                      <div class="col-lg-5 d-none d-lg-block bg-chauffeur-image"></div>
                      <div class="col-lg-7">
                          <div class="p-5">
                              <div class="text-center">
                                  <h1 class="h4 text-gray-900 mb-4" style="font-weight: 600;">Inscription</h1>
                              </div>
                              <form method="POST" action="{{ route('register') }}">
                                @csrf
                                  <div class="form-group row">
                                      <div class="col-sm-6 mb-3 mb-sm-0">
                                          <input id="name" type="text" name="name" class="form-control form-control-user"
                                              placeholder="Votre Nom..."  required autofocus autocomplete="name">
                                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                      </div>
                                      <div class="col-sm-6">
                                          <input type="text" name="prenom" class="form-control form-control-user" id="prenom"
                                              placeholder="Votre Prénom..."  required autofocus autocomplete="prenom">
                                          <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <input type="email" name="email" class="form-control form-control-user" id="email"
                                          placeholder="Votre Adresse mail..."  required autocomplete="username">
                                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                  </div>
                                  <div class="form-group">
                                      <input type="tel" name="telephone" class="form-control form-control-user" id="telephone"
                                          placeholder="Téléphone..."  required autofocus autocomplete="telephone">
                                      <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-sm-6 mb-3 mb-sm-0">
                                          <input type="password" name="password" class="form-control form-control-user"
                                          id="password" placeholder="Mot de passe" required autocomplete="new-password">
                                          <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                      </div>
                                      <div class="col-sm-6">
                                          <input type="password" name="password_confirmation" class="form-control form-control-user"
                                          id="password_confirmation" placeholder="Confirmez le mot de passe" required autocomplete="new-password">
                                          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                      </div>
                                  </div>
                                  @foreach ($roles as $role)
                                  @if ( $role['nom']  == "chauffeur")
                                    <div class="form-group">
                                        <input type="number" name="roles" class="form-control form-control-user" id="role" value="{{ $role['id'] }}" hidden>
                                    </div>
                                  @endif
                                    @endforeach
                                  <button type="submit" class="btn btn-primary btn-user btn-block" style =" background-color:#F77D0A; border:#F77D0A; font-weight: 600; border-radius:20px;">Créer le compte</button>
                                  <hr>
                                  <a href="/auth/google/redirect" style="border-radius:20px;" class="btn btn-google btn-user btn-block">
                                      <i class="fab fa-google fa-fw"></i> Se connecter avec Google
                                  </a>
                                  <a href="index.html" style="border-radius:20px;" class="btn btn-facebook btn-user btn-block">
                                      <i class="fab fa-facebook-f fa-fw"></i> Se connecter avec Facebook
                                  </a>
                              </form>
                              <hr>
                              <div class="text-center">
                                  <a class="small" href="/motDePasseOublie">Mot de passe oublié</a>
                              </div>
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

    <script src="jss/jquery-3.3.1.js"></script>
    <script src="jss/bootstrap.js"></script>
    <script src ="jss/jquery.dataTables.js"></script>
    <script src ="jss/dataTables.bootstrap4.js"></script>
    <script src="jss/script.js"></script>

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

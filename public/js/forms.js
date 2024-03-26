var compteClient = document.getElementById("compte-client");
var compteChauffeur = document.getElementById("compte-chauffeur");
var formulaire = document.getElementById("formulaire");
var route = "{{ route('register') }}";

    compteClient.addEventListener("click", function() {
        formulaire.innerHTML = `
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
                        <form method="POST" action="">
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
                            <button type="submit" class="btn btn-primary btn-user btn-block" style =" background-color:#F77D0A; border:#F77D0A; font-weight: 600; border-radius:20px;">Créer le compte</button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Se connecter avec Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
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
        `;
    });

    compteChauffeur.addEventListener("click", function() {
        formulaire.innerHTML = `
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
                                <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="name" type="text" name="name" class="form-control form-control-user"
                                        placeholder="Votre Nom..." required autofocus autocomplete="name">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="prenom" class="form-control form-control-user" id="prenom"
                                        placeholder="Votre Prénom..." required autofocus autocomplete="prenom">
                                    <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user" id="email"
                                    placeholder="Votre Adresse mail..." required autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <input type="tel" name="telephone" class="form-control form-control-user" id="telephone"
                                    placeholder="Téléphone..." required autofocus autocomplete="telephone">
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
                            <button type="submit" class="btn btn-primary btn-user btn-block" style =" background-color:#F77D0A; border:#F77D0A; font-weight: 600; border-radius:20px;">Créer le compte</button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Se connecter avec Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
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
        `;
    });

@extends('navbar')
@section('contenu1')
    @includeWhen($erreurs != null , 'erreurs', ['erreurs' => $erreurs])
    <form method="POST" id="form_connexion" class="" action="{{ route('chemin_validerInscription') }}">
        <fieldset id="form1" form="form_connexion" class="container-fluid">
            <legend class="text-center">S'inscrire</legend>
            <div class="row form-group text-center">
                <label for="nom">Nom</label>
                <div class="col-12 col-md-6" id="nom">
                    <input class="form-control"  type="text" name="nom" maxlength="45" required>
                </div>
            </div>
            <div class="row form-group text-center">
                <label for="mdp">Prénom</label>
                <div class="col-12 col-md-6" id ="prenom">
                    <input class="form-control"   type = "text"  name = "prenom" maxlength="45" required>
                </div>
            </div>
            <div class="row form-group text-center">
                <label for="nom">Adresse mail</label>
                <div class="col-12 col-md-6" id="email">
                    <input class="form-control"  type="email" name="email" maxlength="45" required>
                </div>
            </div>
            <div class="row form-group text-center">
                <label for="login">Login</label>
                <div class="col-12 col-md-6" id="login">
                    <input class="form-control"  type="text" name="login" maxlength="45" required>
                </div>
            </div>
            <div class="row form-group text-center">
                <label for="mdp">Mot de passe</label>
                <div class="col-12 col-md-6" id ="mdp">
                    <input class="form-control"   type = "password"  name = "mdp" maxlength="45" required>
                </div>
            </div>
            <div class="row form-group text-center">
                <label for="mdp">Téléphone</label>
                <div class="col-12 col-md-6" id ="tel">
                    <input class="form-control"   type = "tel"  name = "tel" maxlength="45" required>
                </div>
            </div>
            <div class="justify-content-md-center justify-content-sm-center text-center" id="Button">
                <p><input class="btn btn-primary" type="submit" value="Valider"></p>
            </div>
        </fieldset>
    </form>
@endsection
@extends('pied')


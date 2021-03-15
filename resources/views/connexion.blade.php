@extends('navbar')
@section('contenu1')
@includeWhen($erreurs != null , 'erreurs', ['erreurs' => $erreurs])
<form method="POST" id="form_connexion" class="" action="{{ route('chemin_validerConnexion') }}">
    <fieldset id="form1" form="form_connexion" class="container-fluid">
        <legend class="text-center">Se connecter</legend>
        <div class="row form-group text-center">
            <label for="mdp">Identifiant</label>
            <div class="col-12 col-md-6" id="login">
                <input class="form-control"  type="text" name="login" maxlength="45" required>
            </div>
        </div>
        <div class="row form-group text-center">
            <label for="mdp">Mot de passe</label>
            <div class="col-12 col-md-6" id ="mdp">
                <input class="form-control"   type = "password"  aria-describedby="mdp_oublie" name = "mdp" maxlength="45" required>
            </div>
        </div>
        <div class="justify-content-md-center justify-content-sm-center text-center" id="Button">
            <p><input class="btn btn-primary" aria-describedby="creer_compte" type="submit" value="Valider"></p>
            <small id="creer_compte" class="form-text text-muted">
                <p>Pas de compte ? Inscrivez-vous <a href="{{ route('chemin_inscription') }}">ici</a> !</p>
            </small>
        </div>
    </fieldset>
</form>
@endsection

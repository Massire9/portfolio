@extends('navbar')
@section('contenu1')
@includeWhen($erreurs != null , 'erreurs', ['erreurs' => $erreurs])
<form method="POST" id="form_connexion" class="" action="{{ route('chemin_validerConnexion') }}">
    <fieldset id="form1" form="form_connexion" class="container-fluid">
        <legend class="text-center">Se connecter</legend>
        <div class="row form-group text-center">
            <label for="mdp">Identifiant</label>
            <div class="col-12 col-md-6" id="login">
                <input class="form-control"  type="text" name="login" maxlength="45" >
            </div>
        </div>
        <div class="row form-group text-center">
            <label for="mdp">Mot de passe</label>
            <div class="col-12 col-md-6" id ="mdp">
                <input class="form-control"   type = "password"  aria-describedby="mdp_oublie" name = "mdp" maxlength="45">
            </div>
        </div>
        <div class="justify-content-md-center justify-content-sm-center text-center" id="Button">
            <input class="btn btn-primary" aria-describedby="creer_compte" type="submit" value="Valider">
            <small id="creer_compte" class="form-text text-muted">
                <a href="" data-toggle="modal" data-target="#mdpOublie" >Mot de passe oublié ?</a>
            </small>
            <small id="creer_compte" class="form-text text-muted">
                <p>Pas de compte ? Inscrivez-vous <a href="{{ route('chemin_inscription') }}">ici</a> !</p>
            </small>
        </div>
    </fieldset>

</form>

<form method="POST" action="{{route('chemin_mdpOublie')}}">
    <div class="modal fade" id="mdpOublie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mot de passe oublié</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row form-group text-center">
                        <label for="nom">Adresse mail</label>
                        <div class="col-12 col-md-6" id="email">
                            <input class="form-control"  type="email" name="mail" maxlength="55"  width="125%">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

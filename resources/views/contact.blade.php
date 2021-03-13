@extends('navbar')
@section('contenu1')

@includeWhen($erreurs != null , 'erreurs', ['erreurs' => $erreurs])
@if(is_array(session('membre')))
<form method="POST" id="form_connexion" class="shadow-lg" action="{{ route('chemin_validerContact') }}">
    <fieldset id="form1" form="form_connexion" class="container-fluid">
        <legend class="text-center">Formulaire de contact</legend>
        <div class="row form-group text-center">
            <label for="obj">Objet</label>
            <div class="col-12 col-md-6" id="login">
                <input class="form-control"  type="text" name="obj" maxlength="45" required>
            </div>
        </div>
        <div class="row form-group text-center">
            <label for="mdp">Corps</label>
            <div class="col-12 col-md-6" id ="corps">
                <textarea class="form-control"  aria-describedby="Corps du mail" name = "corps" maxlength="1000" required></textarea>
            </div>
        </div>
        <div class="justify-content-md-center justify-content-sm-center text-center" id="Button">
            <p><input class="btn btn-primary" aria-describedby="creer_compte" type="submit" value="Envoyer"></p>
        </div>
    </fieldset>
</form>
@endif
@endsection

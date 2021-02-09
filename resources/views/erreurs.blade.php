<fieldset id="erreurs">
<div id = "erreurs" class ="text-center">
    <ul>
        @foreach($erreurs as $erreur)
            {{ $erreur }}<br>
        @endforeach
    </ul>
</div>
</fieldset>

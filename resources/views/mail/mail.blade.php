<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Prise de contact</h2>
<p>Réception d'une prise de contact avec les éléments suivants :</p>
<ul>
    <li><strong>Nom</strong> : {{ session('membre')['nom'] . session('membre')['prenom'] }}</li>
    <li><strong>Email</strong> : {{ session('membre')['mail'] }}</li>
    <li><strong>Objet</strong> : {{ $contact['objet'] }}</li>
    <li><strong>Message</strong> : </li></ul>
    <br>{{ $contact['corps'] }}

</body>
</html>

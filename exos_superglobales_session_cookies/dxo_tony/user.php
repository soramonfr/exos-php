<?php
if (isset($_POST["login"]) && isset($_POST["password"])) {
    setcookie("password", $_POST["password"], time()+36000, null, null, false, true);
    setcookie("login", $_POST["login"], time()+36000, null, null, false, true);
    header('Location: user.php'); // on retourne sur user.php (refresh)
} 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Partie 8 - Exo 3</title>
</head>
<body>

<p>
Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.
</p>

<p>Identifiant = <?= isset($_COOKIE['login']) ? $_COOKIE['login'] : "Login non renseigné" ?></p>
<p>Mot de passe = <?= isset($_COOKIE['password']) ? $_COOKIE['password'] : "Password non renseigné" ?></p>

<a href="index.php" class="btn btn-primary">Modifier les cookies</a>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
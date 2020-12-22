<?php
if (isset($_POST["submit"])) {
    $login = $_POST["login"];
    $password  = $_POST["password"];
    setcookie("login", $login, time()+600);
    setcookie("password", $password, time()+600);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Variables superglobales, sessions et cookies</title>
</head>

<body>
    <h1># PHP - Variables superglobales, sessions et cookies</h1>

    <p>## Exercice 3 <br>
        Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.
    </p>
    <p>## Exercice 4 <br>
        Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.
    </p>
    <p>## Exercice 5 <br>
        Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.
    </p>
    <form action="index.php" method="post">
        <label for="login">Nom d'utilisateur</label>
        <input type="text" name="login" id="login">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="submit" value="Valider">
    </form>

<?php

?>

</body>

</html>
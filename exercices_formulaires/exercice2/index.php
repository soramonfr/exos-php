<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les formulaires</title>
</head>

<body>
    <h1># PHP - Les formulaires</h1>

    <p>## Exercice 2 <br>
        Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **POST**.
    </p>

    <form action="user.php" method="post">
        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName">
        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" id="firstName">
        <input type="submit" value="Valider">
    </form>

    <?php

    ?>

</body>

</html>
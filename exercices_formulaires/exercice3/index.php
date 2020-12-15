<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les formulaires</title>
</head>

<body>
    <h1># PHP - Les formulaires</h1>

    <p>## Exercice 3 <br>
        Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.
    </p>

    <form action="user.php" method="get">
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
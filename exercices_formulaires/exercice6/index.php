<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les formulaires</title>
</head>

<body>
    <h1># PHP - Les formulaires</h1>

    <p>## Exercice 6 <br>
        Avec le formulaire de l'exercice 5, Si des données sont passées en **POST** ou en **GET**, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
        Utiliser qu'une seule page.
    </p>

    <form action="index.php" method="get">
        <label for="title">Civilité</label>
        <select name="title" id="title">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
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
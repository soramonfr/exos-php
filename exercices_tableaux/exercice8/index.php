<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les tableaux</title>
</head>

<body>
    <h1># PHP - Les tableaux</h1>

    <p>## Exercice 8 <br>
        Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
    </p>

    <?php
    $months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];
    
    foreach ($months as $monthNames) {
        echo $monthNames . "<br>";
    }
    ?>

</body>

</html>
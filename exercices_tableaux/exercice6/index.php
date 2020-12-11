<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les tableaux</title>
</head>

<body>
    <h1># PHP - Les tableaux</h1>

    <p>## Exercice 6 <br>
        Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
    </p>

    <?php
    $hautsDeFrance = [
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme',
    ];
    var_dump($hautsDeFrance[59]);
    ?>

</body>

</html>
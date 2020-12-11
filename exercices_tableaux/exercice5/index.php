<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les tableaux</title>
</head>

<body>
    <h1># PHP - Les tableaux</h1>

    <p>## Exercice 5 <br>
        Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.
    </p>

    <?php
    $hautsDeFrance = [
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme',
    ];
    var_dump($hautsDeFrance);
    ?>

</body>

</html>
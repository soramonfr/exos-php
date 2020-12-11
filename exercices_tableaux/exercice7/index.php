<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les tableaux</title>
</head>

<body>
    <h1># PHP - Les tableaux</h1>

    <p>## Exercice 7 <br>
        Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. (51 Marne)
    </p>

    <?php
    $hautsDeFrance = [
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme',
    ];

    // $hautsDeFrance = array (
    //     '02' => 'Aisne',
    //     '59' => 'Nord',
    //     '60' => 'Oise',
    //     '62' => 'Pas-de-Calais',
    //     '80' => 'Somme');

    $hautsDeFrance['51'] = 'Marne';
    var_dump($hautsDeFrance);
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les tableaux</title>
</head>

<body>
    <h1># PHP - Les tableaux</h1>

    <p>## Exercice 10 <br>
        Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. <br>
        Cela pourra être, par exemple, de la forme : **"Le département" + nom du département + "a le numéro" + numéro du département**
    </p>

    <?php
    $hautsDeFrance = [
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme',
    ];

    foreach ($hautsDeFrance as $departmentNumbers => $departments) {
        echo "Le département $departments a pour numéro le $departmentNumbers. <br> ";
    }

    // foreach ($tableau as $key => $value) {
    //     # code...
    // }
    ?>

</body>

</html>
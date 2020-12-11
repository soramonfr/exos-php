<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les boucles</title>
</head>

<body>
    <h1># PHP - Les boucles</h1>

    <p>## Exercice 2 <br>
        Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.<br>
        **Tant que** la première variable n'est pas supérieure à 20 :<br>
        - multiplier la première variable avec la deuxième<br>
        - afficher le résultat<br>
        - incrementer la première variable
    </p>

    <?php
    $i = 0;
    $ibiza = 50;

    while ($i < 20) {
        echo $i * $ibiza . "<br>";
        $i++;
    }
    ?>

</body>

</html>
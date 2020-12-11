<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les boucles</title>
</head>

<body>
    <h1># PHP - Les boucles</h1>

    <p>## Exercice 1 <br>
        Créer une variable et l'initialiser à 0.<br>
        **Tant que** cette variable n'atteint pas 10, il faut :<br>
        - l'afficher<br>
        - l'incrementer
    </p>

    <?php
    $i = 0;
    while ($i <= 10) {
        echo $i++ . "<br>";
    }
    ?>

</body>

</html>
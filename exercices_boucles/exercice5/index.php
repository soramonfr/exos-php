<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les boucles</title>
</head>

<body>
    <h1># PHP - Les boucles</h1>

    <p>## Exercice 5 <br>
        **En allant** de 1 à 15 avec un pas de 1, afficher le message **On y arrive presque**.
    </p>

    <?php
    for ($i = 1; $i < 16; $i++) {
        echo "On y arrive presque" . "<br>";
    }
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les boucles</title>
</head>

<body>
    <h1># PHP - Les boucles</h1>

    <p>## Exercice 7 <br>
        **En allant** de 200 à 0 avec un pas de 12, afficher le message **Enfin !!!!**.
    </p>

    <?php
    for ($i = 200; $i >= 0; $i -= 12) {
        echo "Enfin !!!!" . "<br>";
    }
    ?>
</body>

</html>
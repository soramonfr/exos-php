<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les boucles</title>
</head>

<body>
    <h1># PHP - Les boucles</h1>

    <p>## Exercice 6 <br>
        **En allant** de 20 à 0 avec un pas de 1, afficher le message **C'est presque bon**.
    </p>

    <?php
    for ($i = 20; $i > 0; $i--) {
        echo "C'est presque bon" . "<br>";
    }
    ?>
</body>

</html>
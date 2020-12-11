<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les fonctions</title>
</head>

<body>
    <h1># PHP - Les fonctions</h1>

    <p>## Exercice 8 <br>
        Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
        Tous les paramètres doivent avoir une valeur par défaut.
    </p>

    <?php
    function addition($num1, $num2, $num3)
    {
    return $num1 + $num2 + $num3;
    }
    echo addition(1, 5, 6);
    ?>

</body>

</html>
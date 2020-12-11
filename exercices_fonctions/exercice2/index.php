<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les fonctions</title>
</head>

<body>
    <h1># PHP - Les fonctions</h1>

    <p>## Exercice 2 <br>
        Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
    </p>

    <?php
    function exo2($chocolat)
    {
        return $chocolat;
    }
    echo exo2("kinder");
    ?>

</body>

</html>
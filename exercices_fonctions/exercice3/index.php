<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les fonctions</title>
</head>

<body>
    <h1># PHP - Les fonctions</h1>

    <p>## Exercice 3 <br>
        Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines
    </p>

    <?php
    function exo3($string1, $string2)
    {
        return $string1 . $string2;
    }
    echo exo3("coucou", "tu veux voir mon kinder?");
    ?>

</body>

</html>
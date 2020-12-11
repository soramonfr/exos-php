<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les fonctions</title>
</head>

<body>
    <h1># PHP - Les fonctions</h1>

    <p>## Exercice 5 <br>
        Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
    </p>

    <?php
function exo5($string1, $num1)
{
    return $string1 . $num1;
}
echo exo5("🎅Le numéro du père noël est le suivant:", 404);
    ?>

</body>

</html>
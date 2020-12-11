<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les fonctions</title>
</head>

<body>
    <h1># PHP - Les fonctions</h1>

    <p>## Exercice 4 <br>
        Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br>
        - **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième<br>
        - **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième<br>
        - **Les deux nombres sont identiques** si les deux nombres sont égaux
    </p>

    <?php
    function exo4($num1, $num2)
    {
        if ($num1 > $num2) {
            return "Le premier nombre est plus grand";
        } else if ($num1 < $num2) {
            return "Le premier nombre est plus petit";
        } else {
            return "Les deux nombres sont identiques";
        }
    }
    echo exo4(666, 404);
    ?>

</body>

</html>
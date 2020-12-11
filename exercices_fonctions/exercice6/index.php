<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les fonctions</title>
</head>

<body>
    <h1># PHP - Les fonctions</h1>

    <p>## Exercice 6 <br>
        Faire une fonction qui prend trois paramètres : **le nom, le prénom et l'âge d'une personne**. Elle doit renvoyer une chaine de la forme :
        "Bonjour" + **nom** + **prénom** + ",tu as" + **age** + "ans".
    </p>

    <?php
function exo6($lastName, $firstName, $age)
{
    return "Bonjour $lastName $firstName, tu as $age ans.";
}
echo exo6("Carey", "Mariah", 666);
    ?>

</body>

</html>
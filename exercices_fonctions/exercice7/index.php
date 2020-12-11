<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les fonctions</title>
</head>

<body>
    <h1># PHP - Les fonctions</h1>

    <p>## Exercice 7 <br>
        Faire une fonction qui prend deux paramètres : **l'âge et le genre d'une personne**. Le genre peut être :<br>
        - Homme<br>
        - Femme<br>
        La fonction doit renvoyer en fonction des paramètres :<br>
        - **Vous êtes un homme et vous êtes majeur**<br>
        - **Vous êtes un homme et vous êtes mineur**<br>
        - **Vous êtes une femme et vous êtes majeur**<br>
        - **Vous êtes une femme et vous êtes mineur**<br>
        <br>
        Gérer tous les cas.
    </p>

    <?php
    function exo7($age, $gender)
    {
        if ($age > 18 && $gender === "Homme") {
         return "Vous êtes un homme et vous êtes majeur 🧟‍♂️";
        } elseif ($age < 18 && $gender === "Homme") {
            return "Vous êtes un homme et vous êtes mineur 👶";
        } elseif ($age > 18 && $gender === "Femme") {
            return "Vous êtes une femme et vous êtes majeure 👸";
        } elseif ($age < 18 && $gender === "Femme") {
            return "Vous êtes une femme et vous êtes mineure 👋";
        } else {
            return "Vous êtes un alien 👽";
        }

        // Simplification?
        // if ($age > 18) {
        //     $status = "majeur";
        // } else {
        //     $status = "mineur";
        // }

        // if ($gender === "Femme") {
        //     $article = "une";
        //     $status = $status . "e";
        // } else {
        //     $article = "un";
        // }

        // return "Vous êtes $article " . strtolower($gender) . " et vous êtes $status.";

    }
    echo exo7(22, "Homme");
    ?>

</body>

</html>
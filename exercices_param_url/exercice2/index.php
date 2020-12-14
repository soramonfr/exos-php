<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les paramètres d'URL</title>
</head>

<body>
    <h1># PHP - Les paramètres d'URL</h1>

    <p>## Exercice 2 <br>
        Voici l'URL à étudier :<br>

        index.php?lastname=Shima&firstname=Brian<br>

        Faire une page index.php.<br>
        Sur cette page faire 2 boutons :<br>

        Le premier "bouton" doit contenir un href qui pointe vers l'URL. Il faut ensuite tester sur cette même page que le paramètre age existe :<br>
        - S'il est présent, l'afficher.<br>
        - Dans le cas contraire, mettre un message : "il manque le paramètre age".<br>
        Le deuxieme "bouton" doit permettre de revenir à la page index.php.
    </p>

    <a href="index.php?lastname=Shima&amp;firstname=Brian"><input type="button" value="Envoi des paramètres"></a>
    <a href="index.php"><input type="button" value="Retour INDEX"></a>

    <?php
    if (isset($_GET['lastname']) && isset($_GET['firstname']) && isset($_GET['age'])) {
        echo "<p>Age :" . $_GET['age'] . "ans</p>";
    } else if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
        echo "<p>Il manque le paramètre âge 🕵️‍♀️</p>";
    }
    ?>

</body>

</html>
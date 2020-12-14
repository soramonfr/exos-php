<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les paramètres d'URL</title>
</head>

<body>
    <h1># PHP - Les paramètres d'URL</h1>

    <p>## Exercice 3 <br>
        Voici l'URL à étudier :<br>

        index.php?startDate=01/09/2019&endDate=17/03/2020<br>

        Faire une page index.php.<br>
        Sur cette page faire 2 boutons :<br>

        Le premier "bouton" doit contenir un href qui pointe vers l'URL. Il faut ensuite tester sur cette même page que tous les paramètres existent :<br>
        - S'ils sont présents, les afficher.<br>
        - Dans le cas contraire ne rien afficher.<br>
        Le deuxieme "bouton" doit permettre de revenir à la page index.php.
    </p>

    <a href="index.php?startDate=01/09/2019&amp;endDate=17/03/2020"><input type="button" value="Envoi des paramètres"></a>
    <a href="index.php"><input type="button" value="Retour INDEX"></a>
    
    <?php
    if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
        echo "<p>Date de début :" . $_GET['startDate'] . "</p>"; 
        echo "<p>Date de fin :" . $_GET['endDate'] . "</p>";
    } 
    ?>

</body>

</html>
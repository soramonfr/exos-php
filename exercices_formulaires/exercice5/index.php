<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les formulaires</title>
</head>

<body>
    <h1># PHP - Les formulaires</h1>

    <p>## Exercice 5 <br>
        Créer un formulaire sur la page **index.php** avec :<br>
        - Une liste déroulante pour la civilité (Mr ou Mme)<br>
        - Un champ texte pour le nom<br>
        - Un champ texte pour le prénom<br>
        <br>
        Ce formulaire doit rediriger vers la page **index.php**.<br>
        Vous avez le choix de la méthode.<br>
    </p>

    <form action="index.php" method="get">
        <label for="title">Civilité</label>
        <select name="title" id="title">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName">
        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" id="firstName">
        <input type="submit" value="Valider">
    </form>

    <?php

    ?>


</body>

</html>
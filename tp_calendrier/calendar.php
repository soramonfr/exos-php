<?php
$days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
$months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
$br = "<br>";

if (!isset($_GET["months"])) {
    echo "🚧 Veuillez saisir un mois" . $br;
}

if (!isset($_GET["years"])) {
    echo "🚧 Veuillez saisir une année" . $br;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - TP calendrier</title>
</head>

<body>
<!-- Génération du titre Mois + Année selectionnés -->
    <?php
    if (isset($_GET["months"]) && isset($_GET["years"])) {
    ?>
        <h1>Affichage du calendrier pour <?= $_GET["months"] . " " . $_GET["years"] ?></h1>
    <?php
    }
    ?>

<!-- Génération du tableau -->
    <table>
        <thead>
            <tr>
                <?php
                foreach ($days as $day) {
                ?>
                    <th style="width: 100px;"><?= $day ?></th>
                <?php
                }
                ?>
            </tr>
        </thead>
    </table>
    
<!-- Bouton de retour -->
    <a href="index.php"><button type="submit">Retour au formulaire</button></a>
</body>

</html>
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
    <?php
    if (isset($_GET["months"]) && isset($_GET["years"])) {
    ?>
        <h1 class="text-center text-primary m-4"><?= $_GET["months"] . " " . $_GET["years"] ?></h1>
    <?php
    }
    ?>

    <table class="table table-bordered">
        <thead class="title text-center text-white bg-dark">
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
    <a href="index.php"><button type="submit">Retour au formulaire</button></a>


</body>

</html>
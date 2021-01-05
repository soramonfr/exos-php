<?php 
$days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
$months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
$br = "<br>";

if (!isset($_GET["months"])) {
    echo "🚧 Veuillez saisir un mois" . $br;
} else {
    echo "Le mois saisi est: " . $_GET["months"] . $br;
}

if (!isset($_GET["years"])) {
    echo "🚧 Veuillez saisir une année" . $br;
} else {
    echo "L'année saisie est: " . $_GET["years"] . $br;
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
<a href="index.php"><button type="submit">Retour au formulaire</button></a>


</body>

</html>
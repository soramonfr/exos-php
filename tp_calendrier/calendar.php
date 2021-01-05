<?php
// Réglage timezone car par défaut, renvoie GMT
date_default_timezone_set("Europe/Paris");
// Réglage caractères spéciaux
setlocale(LC_ALL, "fr.UTF-8");

$days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
$months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
$br = "<br>";

// Fail fast
if (!isset($_GET["months"])) {
    echo "🚧 Veuillez saisir un mois." . $br;
}

if (!isset($_GET["years"])) {
    echo "🚧 Veuillez saisir une année." . $br;
}

// Détermination du 1er jour du mois et du nb de jours dans le mois
if (isset($_GET["months"]) && isset($_GET["years"])) {
    $month = array_search($_GET["months"], $months) + 1;
    $year = $_GET["years"];
    $getDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    // Utilisation de intval pour convertir la string en int et ainsi la soustraire à 1 (supp du décalage de 1j dû à l'array)
    $getFirstDay = intval(strftime("%u", strtotime($month . "/01/" . $year)))-1;
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
<!-- Génération du titre : Mois + Année selectionnés -->
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
                echo "<th>$day</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
        <tr>
                <?php 
                for ($day=1; $day <= $getDays ; $day++) { 
                    if ($day%7 === 1){
                        echo "<tr>";
                    }
                    echo "<td>$day</td>";
                    if ($day%7 === 0){
                        echo "</tr>";
                    }
                }
                ?>
        </tr>
        </tbody>
    </table>

<!-- Bouton de retour -->
    <a href="index.php"><button type="submit">Retour au formulaire</button></a>
</body>

</html>
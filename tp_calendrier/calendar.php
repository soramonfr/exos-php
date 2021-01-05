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

// Détermination des 1er et dernier jours du mois et du nb de jours dans le mois
if (isset($_GET["months"]) && isset($_GET["years"])) {
    $month = array_search($_GET["months"], $months) + 1;
    $year = $_GET["years"];
    $getDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    // Utilisation de intval pour convertir la string en int et ainsi la soustraire à 1 (supp du décalage de 1j dû à l'array)
    $getFirstDay = intval(strftime("%u", strtotime($month . "/01/" . $year))) - 1;
    $getLastDay = intval(strftime("%u", strtotime($month . "/" . $getDays . "/" . $year))) - 1;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet" type="text/css">
    <title>PHP - TP calendrier</title>
</head>

<body>
    <!-- Génération du titre : Mois + Année selectionnés -->
    <?php
    if (isset($_GET["months"]) && isset($_GET["years"])) {
    ?>
        <h1 class="text-center py-4"><?= $_GET["months"] . " " . $_GET["years"] ?></h1>
    <?php
    }
    ?>

    <!-- Génération du tableau -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <?php
                foreach ($days as $day) {
                    echo "<th class='table-dark text-center' style='width: 14.28%;'>$day</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                // $getDays + $getFirstDay pour trouver le nb de cases libres avant le 1er jour // 6 - $getLastDay pour trouver le nb de cases vides après le dernier jour
                for ($day = 1; $day <= $getDays + $getFirstDay + (6 - $getLastDay); $day++) {
                    // 1 modulo 7 correspond au 1er jour de ma ligne
                    if ($day % 7 === 1) {
                        echo "<tr>";
                    }
                    // Génération des cases avec/sans les jours
                    if ((($day - $getFirstDay) > 0) && ($day - $getFirstDay <= $getDays)) {
                        echo "<td class='pb-5'>" . ($day - $getFirstDay) . "</td>";
                    } else {
                        echo "<td class='table-secondary'></td>";
                    }
                    // 7 modulo 7 = 0 correspond au dernier jour de ma ligne
                    if ($day % 7 === 0) {
                        echo "</tr>";
                    }
                }
                ?>
            </tr>
        </tbody>
    </table>

    <!-- Bouton de retour -->
    <a href="index.php"><button class="btn btn-dark" type="submit">⏪ Retour au formulaire</button></a>
</body>

</html>
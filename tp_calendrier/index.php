<?php
$days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
$months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
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
    <div class="container">
        <h1 class="text-center pb-5">📅 Générateur de calendrier 📅</h1>
        <form class="text-center" action="calendar.php" method="get">
            <div class="pb-3">
                <label for="month-select" class="bold">Mois:</label>
                <select name="months">
                    <?php
                    foreach ($months as $month) {
                    ?>
                        <option><?= $month ?></option>
                    <?php
                    }
                    ?>
                </select>
                <span class="italic">
                    &
                </span>
                <label for="year-select" class="bold">Année:</label>
                <select name="years">
                    <?php
                    for ($year = 2021; $year <= 2030; $year++) {
                    ?>
                        <option><?= $year ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <input class="btn btn-dark" type="submit" value="Rechercher 🔎">
        </form>
    </div>
</body>

</html>
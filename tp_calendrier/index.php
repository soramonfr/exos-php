<?php
$days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
$months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - TP calendrier</title>
</head>

<body>
    <form action="calendar.php" method="get">
        <div>
            <label for="month-select">Mois:</label>
            <select name="months">
                <option value="">--Options possibles--</option>
                <?php
                foreach ($months as $month) {
                ?>
                    <option><?= $month ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div>
            <label for="year-select">Année:</label>
            <select name="years">
                <option value="">--Options possibles--</option>
                <?php
                for ($year = 2020; $year <= 2030; $year++) {
                ?>
                    <option><?= $year ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <input type="submit" value="Valider">
    </form>
</body>

</html>
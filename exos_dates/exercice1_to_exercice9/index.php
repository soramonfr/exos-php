<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les dates</title>
</head>

<body>
## Exercice 1 <br>
Afficher la date courante en respectant la forme **jj/mm/aaaa** *(ex : 16/05/2016)*<br>
<br>

<?php 
$today = date("j/m/Y");
echo "=> ${today}";
?>

<br>
<br>
## Exercice 2<br>
Afficher la date courante en respectant la forme **jj-mm-aa** *(ex : 16-05-16)*<br>
<br>

<?php 
$today = date("j-m-y");
echo "=> ${today}";
?>

<br>
<br>
## Exercice 3<br>
Afficher la date courante avec le jour de la semaine et le mois en toutes lettres *(ex : mardi 2 août 2016)*  <br>
**Bonus** : Le faire en français.<br><br>


<?php 
// Réglage caractères spéciaux
// setlocale(LC_ALL, "fr_FR.UTF8", "fr.UTF8", "fr_FR.UTF-8", "fr.UTF-8","fra");
// setlocale(LC_ALL, ""); faire un var_dump pour voir l'encodage par défaut. 
// Ici c'est 1252 d'où la nécessité de spécifier utf-8.
setlocale(LC_ALL, "fr.UTF-8");
$today = strftime("%A %d %B %Y");
echo "=> ${today}";
?>

<br><br>
## Exercice 4<br>
Afficher le timestamp du jour.<br>  
Afficher le timestamp du mardi 2 août 2016 à 15h00.<br><br>

<?php 
// Réglage timezone car par défaut, renvoie GMT
date_default_timezone_set("Europe/Paris");
// Réglage caractères spéciaux
setlocale(LC_ALL, "fr.UTF-8");

// Timestamp: Le Timestamp UNIX représente le nombre de secondes écoulées depuis le 1er janvier 1970 à minuit (heure GMT) et jusqu’à une date donnée.
// Timestamp du jour: time() retourne l'heure courante, mesurée en secondes depuis le début de l'époque UNIX, (1er janvier 1970 00:00:00 GMT). 
$currentTimestamp = time();
echo "=> Timestamp du jour: ${currentTimestamp}. <br>";
// Vérification de la date et du fuseau horaire, affichage au format souhaité:
// echo "Soit :" . date("d/m/Y h:i:sa", $currentTimestamp) . "<br>"; // Affiche l'heure au format 0-12 + pm / am
echo "Soit :" . date("d/m/Y H:i:s", $currentTimestamp) . "<br>";


// Mardi 2 août 2016 à 15h00:
$timestamp = mktime(15, 0, 0, 8, 2, 2016);
echo "=> Timestamp du mardi 2 août 2016 à 15h00: ${timestamp}.";
// Affichage du timestamp au format souhaité: echo date("d/m/Y h:i:sa", $timestamp);
?>

<br><br>
## Exercice 5<br>
Afficher le nombre de jours qui sépare la date du jour avec le 16 mai 2016.<br>
<?php
// Solution 1 via POO
$d1 = new DateTime(); // date du jour
echo $d1->format('d/m/Y H:i:s') . "<br>";
$d2 = new DateTime('2016-05-16');
echo $d2->format('d/m/Y H:i:s') . "<br>";
echo "=> Solution 1 (POO) : Nombre de jours entre maintenant et le 16 mai 2016 : " . $d1->diff($d2)->days;
echo "<br>";

// Solution 2 procédurale
$origin = date_create(); // Date du jour
$target = date_create('2016-05-16');
$interval = date_diff($origin, $target);
echo "=> Solution 2 (Procédural): Nombre de jours entre maintenant et le 16 mai 2016 : " . $interval->days;
?>

<br><br>
## Exercice 6<br>
Afficher le nombre de jours dans le mois de février de l'année 2016.<br>
<?php
$d1 = new DateTime("2016-02-01");
$d2 = new DateTime("2016-03-01");
echo "=> Nombre de jours dans le mois de février de l'année 2016 : " . $d1->diff($d2)->days . "<br>";
?>

<br>
## Exercice 7<br>
Afficher la date du jour + 20 jours.<br>
<?php
$interval = new DateInterval("P20D"); // Creation d'un intervalle de 20 jours (Format : P + x + D pour Days) : https://www.php.net/manual/fr/dateinterval.construct.php
$current_day = new DateTime();
echo "=> Date du jour + 20 jours : " . $current_day->add($interval)->format("d/m/Y") . "<br>";

// Solution procédurale
$current_day = date_create();
date_add($current_day, date_interval_create_from_date_string('20 days'));
echo date_format($current_day, 'd-m-Y');
?>

<br><br>
## Exercice 8<br>
Afficher la date du jour - 22 jours<br>
<?php
$interval = new DateInterval("P22D"); // Creation d'un intervalle de 20 jours (Format : P + x + D pour Days) : https://www.php.net/manual/fr/dateinterval.construct.php
$current_day = new DateTime();
echo "=> Date du jour - 22 jours : " . $current_day->sub($interval)->format("d/m/Y") . "<br>";

// Autre solution
echo "=> Date du jour - 22 jours (autre solution): " . date('d-m-Y', strtotime('-22 days')) . "<br>";

// Autre autre Solution
$current_day = date_create();
date_sub($current_day, date_interval_create_from_date_string('22 days'));
echo date_format($current_day, 'd-m-Y');
?>

</body>

</html>
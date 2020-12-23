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
setlocale(LC_ALL, "fr_FR.UTF8", "fr.UTF8", "fr_FR.UTF-8", "fr.UTF-8","fra");
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
setlocale(LC_ALL, "fr_FR.UTF8", "fr.UTF8", "fr_FR.UTF-8", "fr.UTF-8","fra");

// Timestamp: Le Timestamp UNIX représente le nombre de secondes écoulées depuis le 1er janvier 1970 à minuit (heure GMT) et jusqu’à une date donnée.
// Timestamp du jour: time() retourne l'heure courante, mesurée en secondes depuis le début de l'époque UNIX, (1er janvier 1970 00:00:00 GMT). 
$currentTimestamp = time();
echo "=> Timestamp du jour: ${currentTimestamp}. <br>";
// Vérification de la date et du fuseau horaire, affichage au format souhaité:
echo "Soit :" . date("d/m/Y h:i:sa", $currentTimestamp) . "<br>";


// Mardi 2 août 2016 à 15h00:
$timestamp = mktime(15, 0, 0, 8, 2, 2016);
echo "=> Timestamp du mardi 2 août 2016 à 15h00: ${timestamp}.";
// Affichage du timestamp au format souhaité: echo date("d/m/Y h:i:sa", $timestamp);
?>

<br><br>
## Exercice 5<br>
Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.<br>

<br>
## Exercice 6<br>
Afficher le nombre de jour dans le mois de février de l'année 2016.<br>

<br>
## Exercice 7<br>
Afficher la date du jour + 20 jours.<br>

<br>
## Exercice 8<br>
Afficher la date du jour - 22 jours<br>

</body>

</html>
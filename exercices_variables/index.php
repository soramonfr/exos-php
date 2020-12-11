<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les variables</title>
</head>
<body>
<h1>PHP - Les variables</h1>

<p>## Exercice 1 <br>
Créer une variable **name** et l'initialiser avec la valeur de votre choix.  
Afficher son contenu.</p>

<p>## Exercice 2 <br>
Créer trois variables **lastname** , **firstname** et **age** et les initialiser avec les valeurs de votre choix.  
**Attention** age est de type entier.  
Afficher leur contenu.</p>

<p>## Exercice 3 <br>
Créer une variable **km**. L'initialiser à 1. Afficher son contenu.  
Changer sa valeur par 3. Afficher son contenu.  
Changer sa valeur par 125. Afficher son contenu.</p>

<p>## Exercice 4 <br>
Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.  
Les afficher.</p>

<p>## Exercice 5 <br>
Créer une variable de type int. L'initialiser avec **rien** puis afficher sa valeur.  
Donner une valeur à cette variable et l'afficher.</p>

<p>## Exercice 6 <br>
Créer une variable **name** et l'initialiser avec la valeur de votre choix.  
Afficher : "Bonjour" + **name** + ", comment vas tu ?".</p>

<p>## Exercice 7 <br>
Créer trois variables **lastname** , **firstname** et **age** et les initialiser avec les valeurs de votre choix.  
**Attention** age est de type entier.  
Afficher : "Bonjour" + **lastname** + **firstname** + ",tu as" + **age** + "ans".</p>

<p>## Exercice 8 <br>
Créer 3 variables.  
- Dans la première mettre le résultat de l'opération **3 + 4**.  
- Dans la deuxième mettre le résultat de l'opération **5 * 20**.  
- Dans la troisième mettre le résultat de l'opération **45 / 5**.  

Afficher le contenu des variables.</p>

<?php
$name = 3;
echo $name;

$lastname = "Cruchet";
$firstname = "Soraya";
$age = 404;
echo $lastname, $firstname, $age;

$km = 1;
echo $km;
$km = 3;
echo $km;
$km = 125;
echo $km;

$greet = "Bonjour";
$temperature = 6;
$price = 15.99;
$learningphp = true;

?>

</body>
</html>
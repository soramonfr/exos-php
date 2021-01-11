<?php
// Initialisation du tableau d'erreur
$errorMsg = [
    "user-name" => "",
    "user-firstname" => "",
    "user-birthdate" => "",
    "user-birthcountry" => "",
    "user-nationality" => "",
    "user-address" => "",
    "user-email" => "",
    "user-phonenumber" => "",
    "user-education" => "",
    "user-unemploymentid" => "",
    "user-badges" => "",
    "user-link" => "",
    "user-hero" => "",
    "user-hack" => "",
    "user-xp" => ""
];

// Filtrage des données potentiellement dangereuses
// htmlspecialchars() va permettre d’échapper certains caractères spéciaux comme les chevrons « < » et « > » en les transformant en entités HTML.
// trim() qui va supprimer les espaces inutiles et stripslashes() qui va supprimer les antislashes.
function cleanData($var)
{
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

// Une fois les données soumises, on applique le premier filtre
$userName = (isset($_POST["user-name"])) ? cleanData($_POST["user-name"]) : "";
$userFirstname = (isset($_POST["user-firstname"])) ? cleanData($_POST["user-firstname"]) : "";
$userBirthdate = (isset($_POST["user-birthdate"])) ? cleanData($_POST["user-birthdate"]) : "";
$userBirthcountry = (isset($_POST["user-birthcountry"])) ? cleanData($_POST["user-birthcountry"]) : "";
$userNationality = (isset($_POST["user-nationality"])) ? cleanData($_POST["user-nationality"]) : "";
$userAddress = (isset($_POST["user-address"])) ? cleanData($_POST["user-address"]) : "";
$userEmail = (isset($_POST["user-email"])) ? cleanData($_POST["user-email"]) : "";
$userPhonenumber = (isset($_POST["user-phonenumber"])) ? cleanData($_POST["user-phonenumber"]) : "";
$userEducation = (isset($_POST["user-education"])) ? cleanData($_POST["user-education"]) : "";
$userUnemploymentid = (isset($_POST["user-unemploymentid"])) ? cleanData($_POST["user-unemploymentid"]) : "";
$userBadges = (isset($_POST["user-badges"])) ? cleanData($_POST["user-badges"]) : "";
$userLink = (isset($_POST["user-link"])) ? cleanData($_POST["user-link"]) : "";
$userHero = (isset($_POST["user-hero"])) ? cleanData($_POST["user-hero"]) : "";
$userHack = (isset($_POST["user-hack"])) ? cleanData($_POST["user-hack"]) : "";
$userXp = (isset($_POST["user-xp"])) ? cleanData($_POST["user-xp"]) : "";

// Rappels regex
// [ ] : Définir un ensemble de caractères à chercher
// ( ) : servent à définir des sous groupes de recherche
// ^ : début d'une ligne
// $ : fin d'une ligne

// multiplicateur :
// ? : 0 ou 1 occurrence
// + : 1 ou plusieurs occurrences
// * : 0 ou plusieurs occurrences
// { 0, 8} : 0 à 8 occurrences

// Factorisation
// if (empty($var)) return false; revient à faire
// if (empty($var)) {
//     return false
// } 

// Fonctions de validation des champs

// Pour la saisie de texte
function validateTextField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^\D*$/'; 
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

// Pour la saisie d'un email
function validateEmailField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    if (!filter_var($var, FILTER_VALIDATE_EMAIL)) return false;
    return true;
}

// Pour la saisie d'un nombre
// Utilisation de FILTER_VALIDATE_INT possible aussi
function validateNumberField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^[0-9]+$/';
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

// Pour la saisie d'un numéro de téléphoe avec ou sans indicatif
function validateTelField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^(\+[0-9]{2,3})?([0-9]){9,15}$/';
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

// Pour la saisie d'une date
// Format renvoyé par défaut une string "yyyy-mm-dd"
function validateDateField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    if (date_create($var) === false) return false;
    return true;
}

// Pour la saisie d'un champ "divers"
function validateRequiredField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    return true;
}

// Pour la saisie de texte en alpha numérique
function validateAlphaNumTextField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^[\w ]+$/';
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

// Pour la saisie dans un select (renvoie le nom de l'option)
function validateEductationField($var)
{
    $validEducation = array("nodiploma", "highschooldiploma", "techdiploma", "bachelor", "bachelorplus");
    $var = cleanData($var);
    if (empty($var)) return false;
    return in_array($var, $validEducation);
}

// Pour la saisie de l'ID pôle emploi
function validateIdField($var)
{
    // 4735412P88 - 7chiffres + 1lettre + 2 chiffres
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^([0-9]{7})([a-zA-Z]{1})([0-9]{2})$/';
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

// Pour la saisie d'une URL
function validateUrlField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    if (!filter_var($var, FILTER_VALIDATE_URL)) return false;
    return true;
}

// S'il y a eu soumission de formulaire, génération des fonctions de validation
// Stack tip - Checking if form has been submitted:
// For general check if there was a POST action use:
//     if (!empty($_POST))
//     This method won't work for in some cases (e.g. with check boxes and button without a name). You really should use:
//     if ($_SERVER['REQUEST_METHOD'] == 'POST')
        
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errorMsg["user-name"] = (!validateTextField($_POST["user-name"])) ? "Champ non valide" : "✔";
    $errorMsg["user-firstname"] = (!validateTextField($_POST["user-firstname"])) ? "Champ non valide" : "✔";
    $errorMsg["user-birthdate"] = (!validateDateField($_POST["user-birthdate"])) ? "Champ non valide" : "✔";
    $errorMsg["user-birthcountry"] = (!validateTextField($_POST["user-birthcountry"])) ? "Champ non valide" : "✔";
    $errorMsg["user-nationality"] = (!validateTextField($_POST["user-nationality"])) ? "Champ non valide" : "✔";
    $errorMsg["user-address"] = (!validateRequiredField($_POST["user-address"])) ? "Champ non valide" : "✔";
    $errorMsg["user-email"] = (!validateEmailField($_POST["user-email"])) ? "Champ non valide" : "✔";
    $errorMsg["user-phonenumber"] = (!validateTelField($_POST["user-phonenumber"])) ? "Champ non valide" : "✔";
    $errorMsg["user-education"] = (!validateTextField($_POST["user-education"])) ? "Champ non valide" : "✔";
    $errorMsg["user-unemploymentid"] = (!validateIdField($_POST["user-unemploymentid"])) ? "Champ non valide" : "✔";
    $errorMsg["user-badges"] = (!validateNumberField($_POST["user-badges"])) ? "Champ non valide" : "✔";
    $errorMsg["user-link"] = (!validateUrlField($_POST["user-link"])) ? "Champ non valide" : "✔";
    $errorMsg["user-hero"] = (!validateRequiredField($_POST["user-hero"])) ? "Champ non valide" : "✔";
    $errorMsg["user-hack"] = (!validateRequiredField($_POST["user-hack"])) ? "Champ non valide" : "✔";
    $errorMsg["user-xp"] = (!validateRequiredField($_POST["user-xp"])) ? "Champ non valide" : "✔";
}
?>
<?php
// $br = "<br>";

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

// function checkForm ($errors) {
//     (empty($_POST["user-name"])) ? $errors["user-name"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-firstname"])) ? $errors["user-firstname"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-birthdate"])) ? $errors["user-birthdate"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-birthcountry"])) ? $errors["user-birthcountry"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-nationality"])) ? $errors["user-nationality"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-address"])) ? $errors["user-address"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-email"])) ? $errors["user-email"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-phonenumber"])) ? $errors["user-phonenumber"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-education"])) ? $errors["user-education"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-unemploymentid"])) ? $errors["user-unemploymentid"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-badges"])) ? $errors["user-badges"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-link"])) ? $errors["user-link"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-hero"])) ? $errors["user-hero"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-hack"])) ? $errors["user-hack"] = "Veuillez renseigner ce champ" : "";
//     (empty($_POST["user-xp"])) ? $errors["user-xp"] = "Veuillez renseigner ce champ" : "";
//     return $errors;
// }
// var_dump(empty($toto));
// $errors = checkForm($errors);

function cleanData($var) {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

function validateTextField ($var) {
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^[a-zA-Z -]+$/';
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

// [ ] : Définir un ensemble de caractère à chercher
// ( ) : servent à définir des sous groupe de recherche
// ^ : début d'une ligne
// $ : fin d'une ligne

// multiplicateur :
// ? : 0 ou 1 occurence
// + : 1 ou plusieurs occurences
// * : 0 ou plusieurs occurences
// { 0, 8} : 0 à 8 occurrences



function validateEmailField($var) {
    $var = cleanData($var);
    if (empty($var)) return false;
    if (!filter_var($var, FILTER_VALIDATE_EMAIL)) return false;
    return true;
}

function validateNumberField($var) {
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^[0-9]+$/';
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

function validateTelField($var) {
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^(\+[0-9]{2,3})?([0-9]){9,15}$/';
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

function validateDateField($var) {
    $var = cleanData($var);
    if (empty($var)) return false;
    if(date_create($var) === false) return false;
    return true;
}

function validateRequiredField($var) {
    $var = cleanData($var);
    if (empty($var)) return false;
    return true;
}

function validateAlphaNumTextField($var) {
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^[\w ]+$/';
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

function validateEductationField($var) {
    $validEducation = array("nodiploma", "highschooldiploma", "techdiploma", "bachelor", "bachelorplus");
    $var = cleanData($var);
    if (empty($var)) return false;
    return in_array($var, $validEducation);
}

function validateIdField($var) {
    // 4735412P88
    $var = cleanData($var);
    if (empty($var)) return false;
    // TODO Faore la regex
    $textRegex = '/^$/';
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

function validateUrlField($var) {
    // 4735412P88
    $var = cleanData($var);
    if (empty($var)) return false;
    // TODO Faire le filter url
    return true;
}

// S'il y a eu soumission de formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $errorMsg["user-name"] = (!validateTextField($_POST["user-name"])) ? "Champ non valide" : "";
    $errorMsg["user-firstname"] = (!validateTextField($_POST["user-firstname"])) ? "Champ non valide" : "";
    $errorMsg["user-birthdate"] = (!validateDateField($_POST["user-birthdate"])) ? "Champ non valide" : "";
    $errorMsg["user-birthcountry"] = (!validateTextField($_POST["user-birthcountry"])) ? "Champ non valide" : "";
    $errorMsg["user-nationality"] = (!validateTextField($_POST["user-nationality"])) ? "Champ non valide" : "";
    $errorMsg["user-address"] = (!validateRequiredField($_POST["user-address"])) ? "Champ non valide" : "";
    $errorMsg["user-email"] = (!validateEmailField($_POST["user-email"])) ? "Champ non valide" : "";
    $errorMsg["user-phonenumber"] = (!validateTelField($_POST["user-phonenumber"])) ? "Champ non valide" : "";
    $errorMsg["user-education"] = (!validateTextField($_POST["user-education"])) ? "Champ non valide" : "";
    $errorMsg["user-unemploymentid"] = (!validateIdField($_POST["user-unemploymentid"])) ? "Champ non valide" : "";
    $errorMsg["user-badges"] = (!validateNumberField($_POST["user-badges"])) ? "Champ non valide" : "";
    $errorMsg["user-link"] = (!validateUrlField($_POST["user-link"])) ? "Champ non valide" : "";
    $errorMsg["user-hero"] = (!validateRequiredField($_POST["user-hero"])) ? "Champ non valide" : "";
    $errorMsg["user-hack"] = (!validateRequiredField($_POST["user-hack"])) ? "Champ non valide" : "";
    $errorMsg["user-xp"] = (!validateRequiredField($_POST["user-xp"])) ? "Champ non valide" : "";
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet" type="text/css">
    <title>PHP - TP Formulaire d'inscription</title>
</head>

<body>
    <div class="container">

        <h1 class="text-center">Formulaire d'inscription à l'académie du web</h1>
        <form action="index.php" method="post" novalidate >
            <h2>🕵️‍♂️ Etat civil</h2>
            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-name"] ?></span>
                <label for="user-name">Nom: </label>
                <input class="form-control" placeholder="Wonka" type="text" required name="user-name" value="<?= $userName ?>">
            </div>

            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-firstname"] ?></span>
                <label for="user-firstname">Prénom: </label>
                <input class="form-control" placeholder="Willy" type="text" required name="user-firstname" value="<?= $userFirstname ?>">
            </div>

            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-birthdate"] ?></span>
                <label for="user-birthdate">Date de naissance: </label>
                <input class="form-control" type="date" required name="user-birthdate" value="<?= $userBirthdate ?>">
            </div>

            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-birthcountry"] ?></span>
                <label for="user-birthcountry">Pays de naissance: </label>
                <input class="form-control" placeholder="United States of Chocolate Factories" type="text" required name="user-birthcountry" value="<?= $userBirthcountry ?>">
            </div>

            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-nationality"] ?></span>
                <label for="user-nationality">Nationalité: </label>
                <input class="form-control" placeholder="Française" type="text" required name="user-nationality" value="<?= $userNationality ?>">
            </div>

            <h2>💌 Coordonnées</h2>
            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-address"] ?></span>
                <label for="user-address">Adresse: </label>
                <input class="form-control" placeholder="5 rue des tournesols, 69003 Lyon" type="text" required name="user-address" value="<?= $userAddress ?>">
            </div>

            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-email"] ?></span>
                <label for="user-email">E-mail: </label>
                <input class="form-control" placeholder="willy.wonka@chocolate.com" type="email" required name="user-email" value="<?= $userEmail ?>">
            </div>

            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-phonenumber"] ?></span>
                <label for="user-phonenumber">Téléphone: </label>
                <input class="form-control" placeholder="(+33) 06 66 66 66 66" type="tel" required name="user-phonenumber" value="<?= $userPhonenumber ?>">
            </div>

            <h2>📜 Education</h2>
            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-education"] ?></span>
                <label for="user-education">Diplôme: </label>
                <select class="custom-select" required name="user-education" id="user-education">
                    <option value="nodiploma" <?= ($userEducation === "nodiploma") ? "selected" : "" ?>>Sans diplôme</option>
                    <option value="highschooldiploma" <?= ($userEducation === "highschooldiploma") ? "selected" : "" ?>>Bac</option>
                    <option value="techdiploma" <?= ($userEducation === "techdiploma") ? "selected" : "" ?>>Bac +2</option>
                    <option value="bachelor" <?= ($userEducation === "bachelor") ? "selected" : "" ?>>Bac +3</option>
                    <option value="bachelorplus" <?= ($userEducation === "bachelorplus") ? "selected" : "" ?>>Supérieur</option>
                </select>
            </div>

            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-unemploymentid"] ?></span>
                <label for="user-unemploymentnumber">Identifiant pôle emploi: </label>
                <input class="form-control" placeholder="ex: 4735412P88" type="text" required name="user-unemploymentid" value="<?= $userUnemploymentid ?>">
            </div>

            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-badges"]  ?></span>
                <label for="user-badges">Nombre de badges: </label>
                <input class="form-control" placeholder="ex: 5" type="number" min="0" required name="user-badges" value="<?= $userBadges ?>">
            </div>

            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-link"] ?></span>
                <label for="user-link">Lien codecademy: </label>
                <input class="form-control" placeholder="https://www.codecademy.com/profiles/willyWonka6841427321" type="url" required name="user-link" value="<?= $userLink ?>">
            </div>

            <h2>👾 Expériences</h2>
            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-hero"] ?></span>
                <label for="user-hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? </label>
                <textarea class="form-control" placeholder="Je serais ... parce que..." required name="user-hero"><?= $userHero ?></textarea>
            </div>

            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-hack"] ?></span>
                <label for="user-hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                <textarea class="form-control" placeholder="Mon hack a consisté à..." required name="user-hack"><?= $userHack ?></textarea>
            </div>

            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-xp"] ?></span>
                <label for="user-xp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                <textarea class="form-control" placeholder="Oui et c'est la suivante..." required name="user-xp"><?= $userXp ?></textarea>
            </div>

        <button type="submit" class="btn">🥊 Envoyer au boss de fin 🥊</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</body>

</html>
<?php 
require_once 'index_controller.php';
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

        <h1 class="text-center">🔻S'inscrire à l'académie du web 🔻</h1>
        <p class="text-center">Veuillez renseigner tous les champs</p>
        <form action="index.php" method="post" novalidate>
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
                <input class="form-control" type="date" required name="user-birthdate" min="1930-01-01" max="2021-12-31" value="<?= $userBirthdate ?>">
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
                <input class="form-control" placeholder="ex: +33666666666 ou 0666666666" type="tel" required name="user-phonenumber" value="<?= $userPhonenumber ?>">
            </div>

            <h2>📜 Education</h2>
            <div class="form-group">
                <span class="text-danger"><?= $errorMsg["user-education"] ?></span>
                <label for="user-education">Diplôme: </label>
                <select class="custom-select" required name="user-education" id="user-education">
                    <option value="">--Choisissez une option--</option>
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
                <label for="user-xp">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
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
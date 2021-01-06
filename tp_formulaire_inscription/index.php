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
        <form action="index.php" method="post">

            <h2>🕵️‍♂️ Etat civil</h2>
            <div class="form-group">
                <label for="user-name">Nom: </label>
                <input class="form-control" placeholder="Wonka" type="text" name="user-name">
            </div>

            <div class="form-group">
                <label for="user-firstname">Prénom: </label>
                <input class="form-control" placeholder="Willy" type="text" name="user-firstname">
            </div>

            <div class="form-group">
                <label for="user-birthdate">Date de naissance: </label>
                <input class="form-control" type="date" name="user-birthdate">
            </div>

            <div class="form-group">
                <label for="user-birthcountry">Pays de naissance: </label>
                <input class="form-control" placeholder="United States of Chocolate Factories" type="text" name="user-birthcountry">
            </div>

            <div class="form-group">
                <label for="user-nationality">Nationalité: </label>
                <input class="form-control" placeholder="Française" type="text" name="user-nationality">
            </div>

            <h2>💌 Coordonnées</h2>
            <div class="form-group">
                <label for="user-address">Adresse: </label>
                <input class="form-control" placeholder="5 rue des tournesols, 69003 Lyon" type="text" name="user-address">
            </div>

            <div class="form-group">
                <label for="user-email">E-mail: </label>
                <input class="form-control" placeholder="willy.wonka@chocolate.com" type="email" name="user-email">
            </div>

            <div class="form-group">
                <label for="user-phonenumber">Téléphone: </label>
                <input class="form-control" placeholder="(+33) 06 66 66 66 66" type="tel" name="user-phonenumber">
            </div>

            <h2>📜 Education</h2>
            <div class="form-group">
                <label for="user-education">Diplôme: </label>
                <select class="custom-select" name="education" id="user-education">
                    <option value="nodiploma" id="">Sans diplôme</option>
                    <option value="highschooldiploma" id="">Bac</option>
                    <option value="techdiploma" id="">Bac +2</option>
                    <option value="bachelor" id="">Bac +3</option>
                    <option value="bachelorplus" id="">Supérieur</option>
                </select>
            </div>

            <div class="form-group">
                <label for="user-unemploymentnumber">Identifiant pôle emploi: </label>
                <input class="form-control" placeholder="ex: 4735412P88" type="text" name="user-unemploymentnumber">
            </div>

            <div class="form-group">
                <label for="user-badges">Nombre de badges: </label>
                <input class="form-control" placeholder="ex: 5" type="number" name="user-badges">
            </div>

            <div class="form-group">
                <label for="user-link">Lien codecademy: </label>
                <input class="form-control" placeholder="https://www.codecademy.com/profiles/willyWonka6841427321" type="url" name="user-link">
            </div>

            <h2>👾 Expériences</h2>
            <div class="form-group">
                <label for="user-heroquestion">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? </label>
                <textarea class="form-control" placeholder="Je serais ... parce que..."></textarea>
            </div>

            <div class="form-group">
                <label for="user-hackquestion">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                <textarea class="form-control" placeholder="Mon hack a consisté à..."></textarea>
            </div>

            <div class="form-group">
                <label for="user-xpquestion">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                <textarea class="form-control" placeholder="Oui et c'est la suivante..."></textarea>
            </div>

            <button type="submit" class="btn">🥊 Envoyer au boss de fin 🥊</button>
        </form>
    </div>
</body>

</html>
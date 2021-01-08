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
<div class="accordion" id="accordionExample">
<div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" ARIA-controls="collapseTwo">
        💌 Coordonnées
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      
            <div class="form-group">
                <span class="text-danger"><?= 12 ?></span>
                <label for="user-address">Adresse: </label>
                <input class="form-control" placeholder="5 rue des tournesols, 69003 Lyon" type="text" required name="user-address">
            </div>

            <div class="form-group">
                <span class="text-danger"><?= 12 ?></span>
                <label for="user-email">E-mail: </label>
                <input class="form-control" placeholder="willy.wonka@chocolate.com" type="email" required name="user-email">
            </div>

            <div class="form-group">
                <span class="text-danger"><?= 12 ?></span>
                <label for="user-phonenumber">Téléphone: </label>
                <input class="form-control" placeholder="(+33) 06 66 66 66 66" type="tel" required name="user-phonenumber">
            </div>      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       👾 Expériences
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
            <div class="form-group">
                <span class="text-danger"><?= 12 ?></span>
                <label for="user-hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? </label>
                <textarea class="form-control" placeholder="Je serais ... parce que..." required name="user-hero"></textarea>
            </div>

            <div class="form-group">
                <span class="text-danger"><?= 12 ?></span>
                <label for="user-hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                <textarea class="form-control" placeholder="Mon hack a consisté à..." required name="user-hack"></textarea>
            </div>

            <div class="form-group">
                <span class="text-danger"><?= 12 ?></span>
                <label for="user-xp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                <textarea class="form-control" placeholder="Oui et c'est la suivante..." required name="user-xp"></textarea>
            </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
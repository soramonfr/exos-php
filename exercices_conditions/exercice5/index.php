<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Les Conditions</title>
</head>

<body>
  <h1># PHP - Les conditions</h1>

  <p>## Exercice 5<br>
    Traduire ce code avec des if et des else :
    echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
  </p>

  <?php
  $gender = 'Homme';

  if ($gender != 'Homme') {
    echo 'C\'est une développeuse 👩‍💻!!!';
  } else {
    echo 'C\'est un développeur 👨‍💻!!!';
  }
  ?>

</body>

</html>
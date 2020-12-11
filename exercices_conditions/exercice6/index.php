<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Les Conditions</title>
</head>

<body>
  <h1># PHP - Les conditions</h1>

  <p>## Exercice 6<br>
    Traduire ce code avec des if et des else :
    echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
  </p>

  <?php
  $age = 520;

  if ($age >= 18) {
    echo 'Tu es majeur 🎅';
  } else {
    echo 'Tu n\'es pas majeur🕵️‍♂️';
  }
  ?>

</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Les Conditions</title>
</head>

<body>

  <p>## Exercice 8<br>
    Traduire ce code avec des if et des else :
    echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
  </p>

  <?php
  $isOk = false;

  if ($isOk) {
    echo 'c\'est ok 👩‍🦰!!';
  } else {
    echo 'c\'est pas bon 🧛‍♀️!!!';
  }
  ?>

</body>

</html>
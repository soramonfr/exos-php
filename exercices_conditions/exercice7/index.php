<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Les Conditions</title>
</head>

<body>

  <p>## Exercice 7<br>
    Traduire ce code avec des if et des else :
    echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
  </p>

  <?php
  $isOk = true;

  if ($isOk == false) {
    echo 'c\'est pas bon 👩‍🔬!!!';
  } else {
    echo 'c\'est ok 👸!!';
  }
  ?>

</body>

</html>
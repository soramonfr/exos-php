<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Les Conditions</title>
</head>

<body>
  <h1># PHP - Les conditions</h1>

  <p>## Exercice 3<br>
    Créer deux variables **age** et **gender**. La variable **gender** peut prendre comme valeur :<br>
    - Homme<br>
    - Femme<br>

    En fonction de l'âge et du genre afficher la phrase correspondante :<br>
    - **Vous êtes un homme et vous êtes majeur**<br>
    - **Vous êtes un homme et vous êtes mineur**<br>
    - **Vous êtes une femme et vous êtes majeur**<br>
    - **Vous êtes une femme et vous êtes mineur**<br>

    Gérer tous les cas.
  </p>

  <?php
  $age = 22;
  $gender = "Femme";

  if ($age >= 18 && $gender === "Homme") {
    echo "Vous êtes un homme et vous êtes majeur 😎";
  } else if ($age < 18 && $gender === "Homme") {
    echo "Vous êtes un homme et vous êtes mineur 🙄";
  } else if ($age >= 18 && $gender === "Femme") {
    echo "Vous êtes une femme et vous êtes majeure 😊";
  } else {
    echo "Vous êtes une femme et vous êtes mineure 😴";
  }

  ?>

</body>

</html>
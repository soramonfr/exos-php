<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Variables superglobales, sessions et cookies</title>
</head>

<body>
    <h1># PHP - Variables superglobales, sessions et cookies</h1>

    <p>## Exercice 1 <br>
        Faire une page HTML permettant de donner à l'utilisateur :<br>
        - son User Agent<br>
        - son adresse ip<br>
        - le nom du serveur
    </p>

    <?php
    echo "🎈 Your user agent is: " . $_SERVER['HTTP_USER_AGENT'] . "<br>🏤 Your IP adress is: " . $_SERVER['SERVER_ADDR'] . "<br>🎭 This is your server name: " . $_SERVER['SERVER_NAME'];
    ?>

</body>

</html>
<?php
session_start();

function displayIfSet($name, $value) {
    if(isset($value)) {
        echo "$name: $value";
    } else {
        echo "$name: Non renseigné";
    }
    echo "<br>";
}

displayIfSet("🍫Nom", $_SESSION['lastName']);
displayIfSet("🍬Prénom", $_SESSION['firstName']);
displayIfSet("Age", $_SESSION['age']);
?>


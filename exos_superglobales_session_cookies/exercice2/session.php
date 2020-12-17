<?php
session_start();

if(isset($_SESSION['lastName'])) {
    echo '🍫Nom: ' . $_SESSION['lastName'];
} else {
    echo 'Nom: Non renseigné';
}

if(isset($_SESSION['firstName'])) {
    echo "<br>🍬Prénom: " . $_SESSION['firstName'];
} else {
    echo '<br>Prénom: Non renseigné';
}

if(isset($_SESSION['age'])) {
    echo '<br>Age: ' . $_SESSION['age'];
} else {
    echo '<br>Age: Non renseigné';
}
?>


<?php
if(isset($_COOKIE["lastName"])) {
    echo "Nom: " . $_COOKIE["lastName"] . "🍫";
} else {
    echo "Nom: Non renseigné";
}

if(isset($_COOKIE["firstName"])) {
    echo "<br>Prénom: " . $_COOKIE["firstName"] . "🍬";
} else {
    echo "<br>Prénom: Non renseigné";
}

if(isset($_COOKIE["age"])) {
    echo "<br>Age: " . $_COOKIE["age"] . "😇";
} else {
    echo "<br>Age: Non renseigné";
}
?>


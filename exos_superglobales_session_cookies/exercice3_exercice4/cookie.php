<?php
if (isset($_COOKIE["login"]) && (isset($_COOKIE["password"]))) {
    echo "Login: " . $_COOKIE["login"] . "<br>" . "Password: " . $_COOKIE["password"];
} else {
    echo "⛔ Les cookies n'ont pas été déterminés.";
}
?>
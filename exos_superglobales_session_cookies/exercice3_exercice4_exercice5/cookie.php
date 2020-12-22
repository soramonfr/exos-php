<?php
if (isset($_POST["login"]) && (isset($_POST["password"]))) {
    $login = $_POST["login"];
    $password  = $_POST["password"];
    setcookie("login", $login, time()+600);
    setcookie("password", $password, time()+600);
    header("Location: cookie.php");
}

if (isset($_COOKIE["login"]) && (isset($_COOKIE["password"]))) {
    echo "Login: " . $_COOKIE["login"] . "<br>" . "Password: " . $_COOKIE["password"] . "<br>" . " Pour modifier les cookies, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>";
} else {
    echo "⛔ Les cookies n'ont pas été initialisés." . " Pour les initialiser, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>";
}
?>
<?php

// redirection si l'utilisateur n'est pas loggé
if (!isset($_SESSION['USER'])) {
    header('Location: ../views/login.php');
    exit;
}

// var_dump de contrôle
// var_dump($_POST);

// Nous recherchons si il y a une validation de formulaire via une méthode POST (Ca correspond à une validation via un bouton)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie("mySearch", $_POST['mySearch'], time() + 3600);
    setcookie("myView", $_POST['myView'], time() + 3600);

    // nous controllons si la checkbox valentineTheme est coché
    if (isset($_POST['valentineTheme'])) {
        setcookie("valentineTheme", $_POST['valentineTheme'], time() + 3600);
    } else {
        setcookie("valentineTheme", '', time() - 3600);
    }

    // refresh de la page à l'aide d'un header location
    header('Location: ../views/settings.php');
}
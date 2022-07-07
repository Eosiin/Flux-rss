<?php

// var_dump($_SESSION);
// var_dump($_POST);
// redirection si l'utilisateur n'est pas loggé
if (!isset($_SESSION['USER'])) {
    header('Location: ../views/login.php');
    exit;
}

// var_dump de contrôle

// Nous recherchons si il y a une validation de formulaire via une méthode POST (Ca correspond à une validation via un bouton)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // var_dump($_POST['myCheckbox']);
    for ($i = 0; $i <= 2; $i++) {
        if (isset($_POST['myCheckbox'][$i])) {
            setcookie("myCheckbox$i", $_POST['myCheckbox'][$i], time() + 3600);
            // echo 'ok';
        }
    }
    setcookie("myView", $_POST['myView'], time() + 3600);
    if (isset($_POST['whiteTheme'])) {
        setcookie("whiteTheme", $_POST['whiteTheme'], time() + 3600);
    } else {
        setcookie("whiteTheme", '', time() - 3600);
    }
    // refresh de la page à l'aide d'un header location
    header('Location: ../views/settings.php');
    // nous controllons si la checkbox valentineTheme est coché

}

<?php
// chargement des données se trouvant dans lovers.php

require_once "../assets/data/data.php";

// Nous vérifions que le $_COOKIE existe via isset, si oui, on récupère la valeur sinon nous donnons un valeur par défaut
if (isset($_COOKIE['myView'])) {
    $display = $_COOKIE['myView'];
} else {
    // choix de l'affichage par defaut
    $display = 'cards';
}

// Nous vérifions que le $_COOKIE existe via isset, si oui, on récupère la valeur sinon nous donnons un valeur par défaut
if (isset($_COOKIE['mySearch'])) {
    $search = $_COOKIE['mySearch'];
} else {
    // choix de la recherche par defaut
    $search = 'lesDeux';
}
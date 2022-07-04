<?php
// Lorsque nous arrivons sur la page logout nous lançons les fonctions :

// Nous supprimons les cookies : valeur vide et durée de vie négative

setcookie("mySearch", '', time() - 3600);
setcookie("myView", '', time() - 3600);

// On vide et on efface toutes les variables stockés dans $_SESSION 
session_unset();

// On détruit la session de l'utilisateur
session_destroy();
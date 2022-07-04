<?php
session_start();

require_once '../controller/settings-controller.php';

?>

<?php include '../inc/header.php' ?>

<!-- <body class="d-flex flex-column min-vh-100"> -->



<div class="row justify-content-center m-0 p-0">
    <div class="col-8 border border-dark shadow p-4 m-4 text-center">
        <p class="h1">Bonjour, <?= $_SESSION['USER']['firstname'] ?> <?= $_SESSION['USER']['lastname'] ?></p>

        <!-- mise en place d'un formulaire pour récuperer les données -->
        <form action="" method="POST">

            <div class="mt-2">
                <fieldset>
                    <legend>Type de recherche :</legend>
                    <div>
                        <input type="radio" id="PS5" name="mySearch" value="PS5" <?= isset($_COOKIE['mySearch']) ? ($_COOKIE['mySearch'] == 'PS5' ? 'checked' : '') : '' ?>>
                        <label class="ms-2" for="PS5">PS5</label>
                    </div>

                    <div>
                        <input type="radio" id="Switch" name="mySearch" value="Switch" <?= isset($_COOKIE['mySearch']) ? ($_COOKIE['mySearch'] == 'Switch' ? 'checked' : '') : '' ?>>
                        <label class="ms-2" for="Switch">Switch</label>
                    </div>

                    <div>
                        <input type="radio" id="Wii" name="mySearch" value="Wii" <?= isset($_COOKIE['mySearch']) ? ($_COOKIE['mySearch'] == 'Wii' ? 'checked' : '') : 'checked' ?>>
                        <label class="ms-2" for="Wii">Wii</label>
                    </div>
                    <div>
                        <input type="radio" id="PC" name="mySearch" value="PC" <?= isset($_COOKIE['mySearch']) ? ($_COOKIE['mySearch'] == 'PC' ? 'checked' : '') : 'checked' ?>>
                        <label class="ms-2" for="PC">PC</label>
                    </div>
                    <div>
                        <input type="radio" id="Mobile" name="mySearch" value="Mobile" <?= isset($_COOKIE['mySearch']) ? ($_COOKIE['mySearch'] == 'Mobile' ? 'checked' : '') : 'checked' ?>>
                        <label class="ms-2" for="Mobile">Mobile</label>
                    </div>
                </fieldset>
            </div>
            <div class="mt-2">
                <fieldset>
                    <legend>Choix d'affichage :</legend>
                    <div>
                        <input type="radio" id="carte" name="myView" value="cards" <?= isset($_COOKIE['myView']) ? ($_COOKIE['myView'] == 'cards' ? 'checked' : '') : 'checked' ?>>
                        <label class="ms-2" for="carte">Cartes</label>
                    </div>

                    <div>
                        <input type="radio" id="liste" name="myView" value="list" <?= isset($_COOKIE['myView']) ? ($_COOKIE['myView'] == 'list' ? 'checked' : '') : '' ?>>
                        <label class="ms-2" for="liste">Liste</label>
                    </div>
                </fieldset>
            </div>
            

            <!-- bouton permettant de valider le formulaire -->
            <button class="btn btn-dark mt-3">Enregistrer</button>

        </form>

    </div>
</div>

<?php include '../inc/footer.php' ?>

<!-- </body> -->

<!-- </html> -->
<?php
session_start();
// var_dump($_COOKIE['myView']);
// var_dump($_COOKIE['myCheckbox0']);
// var_dump($_COOKIE['myCheckbox1']);
// var_dump($_COOKIE['myCheckbox2']);
require_once '../controller/settings-controller.php';
?>
<?php include '../inc/header.php' ?>
<div class="row justify-content-center m-0 p-0">
    <div class="col-8 <?= (isset($_SESSION['USER']) && isset($_COOKIE["whiteTheme"]) && $_COOKIE["whiteTheme"] == "on") ? "border border-dark"  : "border border-light" ?> shadow p-4 m-4 text-center">
        <p class="h1">Settings</p>
        <!-- mise en place d'un formulaire pour récuperer les données -->
        <form action="" method="POST">
            <div class="mt-2">
                <fieldset>
                    <legend>Type de recherche :</legend>
                    <div>
                        <input class="myCheckbox" type="checkbox" id="PS5" name="myCheckbox[]" value="ps5" <?= isset($_COOKIE['myCheckbox']) ? ($_COOKIE['myCheckbox'] == 'ps5' ? 'checked' : '') : '' ?>>
                        <label class="ms-2" for="PS5">PS5</label>
                    </div>

                    <div>
                        <input class="myCheckbox" type="checkbox" id="Switch" name="myCheckbox[]" value="switch" <?= isset($_COOKIE['myCheckbox']) ? ($_COOKIE['myCheckbox'] == 'switch' ? 'checked' : '') : '' ?>>
                        <label class="ms-2" for="Switch">Switch</label>
                    </div>

                    <div>
                        <input class="myCheckbox" type="checkbox" id="Wii" name="myCheckbox[]" value="wii" <?= isset($_COOKIE['myCheckbox']) ? ($_COOKIE['myCheckbox'] == 'wii' ? 'checked' : '') : '' ?>>
                        <label class="ms-2" for="Wii">Wii</label>
                    </div>
                    <div>
                        <input class="myCheckbox" type="checkbox" id="PC" name="myCheckbox[]" value="pc" <?= isset($_COOKIE['myCheckbox']) ? ($_COOKIE['myCheckbox'] == 'pc' ? 'checked' : '') : '' ?>>
                        <label class="ms-2" for="PC">PC</label>
                    </div>
                    <div>
                        <input class="myCheckbox" type="checkbox" id="Mobile" name="myCheckbox[]" value="mobile" <?= isset($_COOKIE['myCheckbox']) ? ($_COOKIE['myCheckbox'] == 'mobile' ? 'checked' : '') : '' ?>>
                        <label class="ms-2" for="Mobile">Mobile</label>
                    </div>
                </fieldset>
            </div>
            <div class="mt-2">
                <fieldset>
                    <legend>Choix d'affichage :</legend>
                    <div>
                        <input type="radio" id="6" name="myView" value="6" <?= isset($_COOKIE['myView']) ? ($_COOKIE['myView'] == '6' ? 'checked' : '') : 'checked' ?>>
                        <label class="ms-2" for="6">6</label>
                    </div>

                    <div>
                        <input type="radio" id="9" name="myView" value="9" <?= isset($_COOKIE['myView']) ? ($_COOKIE['myView'] == '9' ? 'checked' : '') : '' ?>>
                        <label class="ms-2" for="9">9</label>
                    </div>
                    <div>
                        <input type="radio" id="12" name="myView" value="12" <?= isset($_COOKIE['myView']) ? ($_COOKIE['myView'] == '12' ? 'checked' : '') : '' ?>>
                        <label class="ms-2" for="12">12</label>
                    </div>
                </fieldset>
            </div>
            <div class="mt-2">
                <fieldset>
                    <legend>Choix du thème :</legend>

                    <div class="row justify-content-center">
                        <div class="col-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="whiteTheme" name="whiteTheme" <?= isset($_COOKIE['whiteTheme']) ? 'checked' : '' ?>>
                                <label class="form-check-label" for="whiteTheme">White Mode</label>
                            </div>
                        </div>
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
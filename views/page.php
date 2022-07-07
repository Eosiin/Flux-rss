<?php
session_start();

require_once '../controller/home-controller.php';
include("../inc/header.php");
if (isset($rss)) {
    // on configure le temps en FR
    setlocale(LC_TIME, "fr_FR", "fra");
    $date_format = '%A %d %B %Y à %H:%M'; // format de la date
?>
    <div class="row justify-content-evenly">
        <?php
        if (isset($_GET['rss'])) {
            if (isset($_SESSION['USER']) && isset($_COOKIE['myView']) && !empty($_COOKIE['myView'])) {
                $count = $_COOKIE['myView'];
            } else {
                $count = 6;
            }
            for ($i = 0; $i < $count; $i++) { ?>
                <div class="card col-lg-3 col-11 p-0 ms-1 p-1 mt-3 border border-dark  <?= (isset($_SESSION['USER']) && isset($_COOKIE[" whiteTheme"]) && $_COOKIE["whiteTheme"]=="on" ? "text-light" : "text-dark" ) ?>">
                    <img src="<?= $rss[$_GET['rss']][$i]->enclosure['url'] ?>" class="card-img-top" alt="photo_titre">
                    <div class="card-body ">
                        <div class="card-title text-center fw-bold fs-5"><?= $rss[$_GET['rss']][$i]->title ?></div>
                        <p><?= $rss[$_GET['rss']][$i]->description ?></p>
                        <div class="d-flex justify-content-evenly">
                            
                            <button href="#" class="btn text-dark fs-6 border border-dark" data-bs-toggle="modal" data-bs-target="#Modal1<?= $i ?>"><span>+ d'infos</span>
                        </div>
                    </div>
                </div>
                <!-- Fin card -->
                <!-- Début Modal  -->
                <div class="modal fade" id="Modal1<?= $i ?>" tabindex="-1" aria-labelledby="FluxRSS" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content border border-dark  <?= (isset($_SESSION['USER']) && isset($_COOKIE[" whiteTheme"]) && $_COOKIE["whiteTheme"]=="on" ? "text-light" : "text-dark" ) ?>">
                            <div class="modal-header border border-dark">
                                <h5 class="modal-title " id="FluxRSS"><?= $rss[$_GET['rss']][$i]->title ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center border border-dark">
                                <a href="<?= $rss[$_GET['rss']][$i]->link ?>" class="text-dark">Vers la page</a>
                            </div>
                            <div class="modal-footer border border-dark">
                                <button type="button" class="btn text-light btn-dark" data-bs-dismiss="modal">Revenir à la page précédente</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Modal -->
    <?php }
        }
    }
    ?>
    <?php
    include("../inc/footer.php");

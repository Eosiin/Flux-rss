<?php
session_start();
require_once '../controller/home-controller.php';
include("../inc/header.php");
// var_dump($_SESSION['USER']);
?>
<?php
if (isset($rss)) {
    // on configure le temps en FR
    setlocale(LC_TIME, "fr_FR", "fra");
    $date_format = '%A %d %B %Y à %H:%M'; // format de la date
    // var_dump($rss['mobile'][0]);
?>
    <div class="d-flex justify-content-center">
        <div id="carouselExampleFade" class="carousel slides slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner ">
                <?php if (isset($_SESSION['USER']) && isset($_COOKIE['myCheckbox0'])) {
                    // for ($a = 0; $a <= 2; $a++) { 
                ?>
                    <div class="carousel-item active d-flex flex-column">
                        <a href="" target=" _blank" data-bs-toggle="modal" data-bs-target="#slide1" class="text-center">
                            <?php if (isset($rss[$_COOKIE["myCheckbox0"]][0]->enclosure['url']) && $rss[$_COOKIE["myCheckbox0"]][0]->enclosure['url'] != "") { ?>
                                <img class="slides-img" src="<?= $rss[$_COOKIE["myCheckbox0"]][0]->enclosure['url'] ?>" alt="" width="200">
                            <?php } ?>
                        </a>
                        <span class="date text-center"><?= strftime($date_format, strtotime($rss[$_COOKIE["myCheckbox0"]][0]->children('dc', true)->date)) ?></span>
                        <a href="<?= $rss[$_COOKIE["myCheckbox0"]][0]->link ?>" target=" _blank" class="text-center ">
                            <span class="titre"><?= $rss[$_COOKIE["myCheckbox0"]][0]->title ?></span>
                        </a>
                    </div>
            </div>
            <?php
                    // } 
            ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <?php } else { ?>
        <div class="carousel-item active d-flex flex-column">
            <a href="<?= $rss['mobile'][0]->link ?>" target=" _blank" data-bs-toggle="modal" data-bs-target="#slide1" class="text-center">
                <?php if (isset($rss['mobile'][0]->enclosure['url']) && $rss['mobile'][0]->enclosure['url'] != "") { ?>
                    <img class="slides-img" src="<?= $rss['mobile'][0]->enclosure['url'] ?>" alt="" width="200">
                <?php } ?>
            </a>
            <span class="date text-center"><?= strftime($date_format, strtotime($rss['mobile'][0]->children('dc', true)->date)) ?></span>
            <a href="<?= $rss['mobile'][0]->link ?>" target=" _blank" class="text-center ">
                <span class="titre"><?= $rss['mobile'][0]->title ?></span>
            </a>
        </div>
        <div class="carousel-item d-flex flex-column">
            <a href="<?= $rss['wii'][0]->link ?>" target=" _blank" data-bs-toggle="modal" data-bs-target="#slide2" class="text-center">
                <?php if (isset($rss['wii'][0]->enclosure['url']) && $rss['wii'][0]->enclosure['url'] != "") { ?>
                    <img class="slides-img" src="<?= $rss['wii'][0]->enclosure['url'] ?>" alt="" width="200">
                <?php } ?>
            </a>
            <span class="date text-center"><?= strftime($date_format, strtotime($rss['wii'][0]->children('dc', true)->date)) ?></span>
            <a href="<?= $rss['wii'][0]->link ?>" target=" _blank" class="text-center">
                <span class="titre"><?= $rss['wii'][0]->title ?></span>
            </a>
        </div>
        <div class="carousel-item d-flex flex-column">
            <a href="<?= $rss['pc'][0]->link ?>" target=" _blank" data-bs-toggle="modal" data-bs-target="#slide3" class="text-center">
                <?php if (isset($rss['pc'][0]->enclosure['url']) && $rss['pc'][0]->enclosure['url'] != "") { ?>
                    <img class="slides-img" src="<?= $rss['pc'][0]->enclosure['url'] ?>" alt="" width="200">
                <?php } ?>
            </a>
            <span class="date text-center"><?= strftime($date_format, strtotime($rss['pc'][0]->children('dc', true)->date)) ?></span>
            <a href="<?= $rss['pc'][0]->link ?>" target=" _blank" class="text-center">
                <span class="titre"><?= $rss['pc'][0]->title ?></span>
            </a>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
<?php } ?>
</div>
<?php for ($i = 1; $i <= 3; $i++) {
        if ($i == 1) {
            $flux = $rss['mobile'];
        } elseif ($i == 2) {
            $flux = $rss['wii'];
        } elseif ($i == 3) {
            $flux = $rss['pc'];
        } ?>
    <div class="modal fade" id="slide<?= $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $flux[0]->title ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><?= $flux[0]->description ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php } ?>
<div class="row justify-content-evenly">
    <?php
    if (isset($_SESSION['USER']) && isset($_COOKIE['myCheckbox0'])) {
        if (isset($_COOKIE['myView']) && !empty($_COOKIE['myView'])) {
            // var_dump($_COOKIE['myView']);
            $count = $_COOKIE['myView'] / 3;
        } else {
            $count = 6 / 3;
        }

        for ($a = 0; $a <= 2; $a++) {
            for ($i = 1; $i <= $count; $i++) { ?>
                <div class="card col-lg-3 col-11 p-0 ms-1 p-1  border border-dark">
                    <img src="<?= $rss[$_COOKIE["myCheckbox$a"]][$i]->enclosure['url'] ?>" class="card-img-top" alt="photo_titre">
                    <div class="card-body <?= (isset($_SESSION['USER']) && isset($_COOKIE[" whiteTheme"]) && $_COOKIE["whiteTheme"] == "on" ? "text-light" : "text-dark") ?>">
                        <div class=" card-title text-center fw-bold fs-5"><?= $rss[$_COOKIE["myCheckbox$a"]][$i]->title ?></div>
                        <p><?= $rss[$_COOKIE["myCheckbox$a"]][$i]->description ?></p>
                        <div class="d-flex justify-content-evenly">

                            <button href="#" class="btn text-dark fs-6 border border-dark" data-bs-toggle="modal" data-bs-target="#Modal<?= $a . $i ?>"><span>+ d'infos</span>
                        </div>
                    </div>
                </div>
                <!-- Fin card -->
                <!-- Début Modal  -->
                <div class="modal fade" id="Modal<?= $a . $i ?>" tabindex="-1" aria-labelledby="FluxRSS" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content border border-dark  <?= (isset($_SESSION['USER']) && isset($_COOKIE[" whiteTheme"]) && $_COOKIE["whiteTheme"] == "on" ? "text-light" : "text-dark") ?>">
                            <div class="modal-header border border-dark">
                                <h5 class="modal-title " id="FluxRSS"><?= $rss[$_COOKIE["myCheckbox$a"]][$i]->title ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center border border-dark">
                                <a href="<?= $rss[$_COOKIE["myCheckbox$a"]][$i]->link ?>" class="text-dark">Vers la page</a>
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
    } else {
        for ($i = 1; $i < 4; $i++) {
            ?>
            <!-- Début Card -->
            <div class="card col-lg-3 col-11 p-0 ms-1 p-1 text-dark border border-dark">
                <img src="<?= $rss['mobile'][$i]->enclosure['url'] ?>" class="card-img-top" alt="photo_titre">
                <div class="card-body ">
                    <div class="card-title text-center fw-bold fs-5"><?= $rss['mobile'][$i]->title ?></div>
                    <p><?= $rss['mobile'][$i]->description ?></p>
                    <div class="d-flex justify-content-evenly">

                        <button href="#" class="btn text-dark fs-6 border border-dark" data-bs-toggle="modal" data-bs-target="#Modal1<?= $i ?>"><span>+ d'infos</span>
                    </div>
                </div>
            </div>
            <!-- Fin card -->
            <!-- Début Modal  -->
            <div class="modal fade" id="Modal1<?= $i ?>" tabindex="-1" aria-labelledby="FluxRSS" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content border border-dark">
                        <div class="modal-header border border-dark">
                            <h5 class="modal-title text-dark" id="FluxRSS"><?= $rss['mobile'][$i]->title ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center border border-dark">
                            <a href="<?= $rss['mobile'][$i]->link ?>" class="text-dark">Vers la page</a>
                        </div>
                        <div class="modal-footer border border-dark">
                            <button type="button" class="btn text-light btn-dark" data-bs-dismiss="modal">Revenir à la page précédente</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Modal -->
        <?php } ?>
        <?php for ($i = 1; $i < 4; $i++) { ?>
            <!-- Début Card -->
            <div class="card col-lg-3 col-11 p-0 ms-1 p-1 mt-3 text-dark border border-dark">
                <img src="<?= $rss['pc'][$i]->enclosure['url'] ?>" class="card-img-top" alt="photo_titre">
                <div class="card-body ">
                    <div class="card-title text-center fw-bold fs-5"><?= $rss['pc'][$i]->title ?></div>
                    <p><?= $rss['pc'][$i]->description ?></p>
                    <div class="d-flex justify-content-evenly">

                        <button href="#" class="btn text-dark fs-6 border border-dark" data-bs-toggle="modal" data-bs-target="#Modal2<?= $i ?>"><span>+ d'infos</span>
                    </div>
                </div>
            </div>
            <!-- Fin card -->
            <!-- Début Modal  -->
            <div class="modal fade" id="Modal2<?= $i ?>" tabindex="-1" aria-labelledby="FluxRSS" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content border border-dark">
                        <div class="modal-header border border-dark">
                            <h5 class="modal-title text-dark" id="FluxRSS"><?= $rss['pc'][$i]->title ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body border border-dark text-center">
                            <a href="<?= $rss['pc'][$i]->link ?>" class="text-dark">Vers la page</a>
                        </div>
                        <div class="modal-footer border border-dark">
                            <button type="button" class="btn text-light btn-dark" data-bs-dismiss="modal">Revenir à la page précédente</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Modal -->
        <?php } ?>
        <?php for ($i = 1; $i < 4; $i++) { ?>
            <!-- Début Card -->
            <div class="card col-lg-3 col-11 p-0 ms-1 p-1 mt-3 text-dark border border-dark">
                <img src="<?= $rss['wii'][$i]->enclosure['url'] ?>" class="card-img-top" alt="photo_titre">
                <div class="card-body ">
                    <div class="card-title text-center fw-bold fs-5"><?= $rss['wii'][$i]->title ?></div>
                    <p><?= $rss['wii'][$i]->description ?></p>
                    <div class="d-flex justify-content-evenly">

                        <button href="#" class="btn text-dark fs-6 border border-dark" data-bs-toggle="modal" data-bs-target="#Modal3<?= $i ?>"><span>+ d'infos</span>
                    </div>
                </div>
            </div>
            <!-- Fin card -->
            <!-- Début Modal  -->
            <div class="modal fade" id="Modal3<?= $i ?>" tabindex="-1" aria-labelledby="FluxRSS" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content border border-dark">
                        <div class="modal-header border border-dark">
                            <h5 class="modal-title text-dark" id="FluxRSS"><?= $rss['wii'][$i]->title ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body border border-dark text-center">
                            <a href="<?= $rss['wii'][$i]->link ?>" class="text-dark">Vers la page</a>
                        </div>
                        <div class="modal-footer border border-dark">
                            <button type="button" class="btn text-light btn-dark" data-bs-dismiss="modal">Revenir à la page précédente</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Modal -->
    <?php }
    } ?>















</div>


<?php
include("../inc/footer.php");
?>
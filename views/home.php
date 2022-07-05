<?php
session_start();
require_once '../controller/home-controller.php';
include("../inc/header.php");

?>

<?php
if (isset($animes)) {
    // on configure le temps en FR
    setlocale(LC_TIME, "fr_FR", "fra");
    $date_format = '%A %d %B %Y à %H:%M'; // format de la date
?>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="<?= $animes[0]->link ?>" target=" _blank" class="">
                    <?php if (isset($animes[0]->enclosure['url']) && $animes[0]->enclosure['url'] != "") { ?>
                        <img src="<?= $animes[0]->enclosure['url'] ?>" alt="" width="200">
                    <?php } ?>
                </a>
                <a href="<?= $animes[0]->link ?>" target=" _blank" class="">
                    <span class="titre"><?= $animes[0]->title ?></span>
                    <!-- <span class="date"><?= strftime($date_format, strtotime($animes[0]->pubDate)) ?></span> -->
                </a>
            </div>
            <div class="carousel-item">
                <a href="<?= $animes[1]->link ?>" target=" _blank" class="">
                    <?php if (isset($animes[1]->enclosure['url']) && $animes[1]->enclosure['url'] != "") { ?>
                        <img src="<?= $animes[1]->enclosure['url'] ?>" alt="" width="200">
                    <?php } ?>
                </a>
                <a href="<?= $animes[1]->link ?>" target=" _blank" class="">
                    <span class="titre"><?= $animes[1]->title ?></span>
                    <!-- <span class="date"><?= strftime($date_format, strtotime($animes[1]->pubDate)) ?></span> -->
                </a>
            </div>
            <div class="carousel-item">
                <a href="<?= $animes[2]->link ?>" target=" _blank" class="">
                    <?php if (isset($animes[2]->enclosure['url']) && $animes[2]->enclosure['url'] != "") { ?>
                        <img src="<?= $animes[2]->enclosure['url'] ?>" alt="" width="200">
                    <?php } ?>
                </a>
                <a href="<?= $animes[2]->link ?>" target=" _blank" class="">
                    <span class="titre"><?= $animes[2]->title ?></span>
                    <!-- <span class="date"><?= strftime($date_format, strtotime($animes[2]->pubDate)) ?></span> -->
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
    <?= "</div>"; ?>
<?php } ?>

<?php
include("../inc/footer.php");
?>
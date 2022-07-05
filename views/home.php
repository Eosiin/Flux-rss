<?php
session_start();
require_once '../controller/home-controller.php';
include("../inc/header.php");

?>
<?php
if (isset($rss)) {
    // on configure le temps en FR
    setlocale(LC_TIME, "fr_FR", "fra");
    $date_format = '%A %d %B %Y à %H:%M'; // format de la date
?>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="<?= $rss['mobile'][0]->link ?>" target=" _blank" class="">
                    <?php if (isset($rss['mobile'][0]->enclosure['url']) && $rss['mobile'][0]->enclosure['url'] != "") { ?>
                        <img src="<?= $rss['mobile'][0]->enclosure['url'] ?>" alt="" width="200">
                    <?php } ?>
                </a>
                <span class="date"><?= strftime($date_format, strtotime($rss['mobile'][0]->pubDate)) ?></span>
                <a href="<?= $rss['mobile'][0]->link ?>" target=" _blank" class="">
                    <span class="titre"><?= $rss['mobile'][0]->title ?></span>
                </a>
            </div>
            <div class="carousel-item">
                <a href="<?= $rss['wii'][0]->link ?>" target=" _blank" class="">
                    <?php if (isset($rss['wii'][0]->enclosure['url']) && $rss['wii'][0]->enclosure['url'] != "") { ?>
                        <img src="<?= $rss['wii'][0]->enclosure['url'] ?>" alt="" width="200">
                    <?php } ?>
                </a>
                <span class="date"><?= strftime($date_format, strtotime($rss['wii'][0]->pubDate)) ?></span>
                <a href="<?= $rss['wii'][0]->link ?>" target=" _blank" class="">
                    <span class="titre"><?= $rss['wii'][0]->title ?></span>
                </a>
            </div>
            <div class="carousel-item">
                <a href="<?= $rss['pc'][0]->link ?>" target=" _blank" class="">
                    <?php if (isset($rss['pc'][0]->enclosure['url']) && $rss['pc'][0]->enclosure['url'] != "") { ?>
                        <img src="<?= $rss['pc'][0]->enclosure['url'] ?>" alt="" width="200">
                    <?php } ?>
                </a>
                <span class="date"><?= strftime($date_format, strtotime($rss['pc'][0]->pubDate)) ?></span>
                <a href="<?= $rss['pc'][0]->link ?>" target=" _blank" class="">
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
    <?= "</div>"; ?>
<?php } ?>

<?php
include("../inc/footer.php");
?>
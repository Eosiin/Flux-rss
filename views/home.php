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
    // var_dump($rss['mobile'][0]);
?>
    <div class="d-flex justify-content-center">
        <div id="carouselExampleFade" class="carousel slides slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner ">
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
    </div>
    <?php
    for ($i = 1; $i <= 3; $i++) {
        if ($i == 1) {
            $flux = $rss['mobile'];
        } elseif ($i == 2) {
            $flux = $rss['wii'];

        } elseif ($i == 3) {
            $flux = $rss['pc'];

        }?>
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

<?php
include("../inc/footer.php");
?>
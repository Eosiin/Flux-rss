<?php
require_once'../controller/home-controller.php';
include("../inc/header.php");
?>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
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

<?php 
if(isset($animes)){
    // on configure le temps en FR
    setlocale (LC_TIME, "fr_FR", "fra");
    $date_format = '%A %d %B %Y à %H:%M'; // format de la date
    ?>
<div class="animesRss"> <h2><a href="http://www.mangaxd.ws/" target="_blank">Flux RSS mangaxd</a></h2>
        <?php foreach ($animes as $anime){ ?>
            <a href="<?php echo $anime->link ?>" target="_blank" class="animeRss">
                <?php if(isset($anime->enclosure['url']) && $anime->enclosure['url'] != ""){ ?>
                    <img src="<?php echo $anime->enclosure['url'] ?>" alt="" width="200">
                <?php } ?>
                <span class="titre"><?php echo $anime->title ?></span>
                <span class="date"><?php echo strftime($date_format, strtotime($anime->pubDate)) ?></span>
            </a>
    <?php } ?>
    <?php echo "</div>"; ?>
<?php } ?>

<?php
include("../inc/footer.php");
?>
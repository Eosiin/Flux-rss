<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="<?= (isset($_SESSION['USER']) && isset($_COOKIE["whiteTheme"]) && $_COOKIE["whiteTheme"] == "on") ? "text-dark bg-light" : "text-light bg-dark" ?>">
    <nav class="navbar navbar-expand-lg <?= (isset($_SESSION['USER']) && isset($_COOKIE["whiteTheme"]) && $_COOKIE["whiteTheme"] == "on") ? "navbar-light bg-light" : "navbar-dark bg-dark" ?>">

        <div class="container-fluid">
            <a class="navbar-brand"><img src="../assets/img/coffre.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="home.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="settings.php">Paramètres</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu <?= (isset($_SESSION['USER']) && isset($_COOKIE["whiteTheme"]) && $_COOKIE["whiteTheme"] == "on") ? '' : "dropdown-menu-dark" ?>" aria-labelledby="navbarDropdown">

                            <?php
                            if (isset($_SESSION['USER']) && empty($_COOKIE['myCheckbox'])) { ?>
                                <li><a class="dropdown-item" href="page.php?rss=<?= $_COOKIE['myCheckbox0'] ?>"><?= $_COOKIE['myCheckbox0'] ?></a></li>
                                <li><a class="dropdown-item" href="page.php?rss=<?= $_COOKIE['myCheckbox1'] ?>"><?= $_COOKIE['myCheckbox1'] ?></a></li>
                                <li><a class="dropdown-item" href="page.php?rss=<?= $_COOKIE['myCheckbox2'] ?>"><?= $_COOKIE['myCheckbox2'] ?></a></li>

                            <?php } else { ?>

                                <li><a class="dropdown-item" href="page.php?rss=mobile">Mobile</a></li>
                                <li><a class="dropdown-item" href="page.php?rss=wii">Wii</a></li>
                                <li><a class="dropdown-item" href="page.php?rss=pc">PC</a></li>

                            <?php }
                            ?>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <?php if (!isset($_SESSION['USER'])) { ?>
                            <a class="nav-link btn" href="login.php"><i class="bi bi-person"></i></a>
                        <?php } else { ?>
                            <a class="nav-link btn" href="logout.php">Deconnexion</a>
                        <?php } ?>

                    </li>
                </ul>
               
            </div>
        </div>
    </nav>

    <h1 class="text-center">ERROR 404 NOT FOUND</h1>
    <div class="row justify-content-center m-0 p-0">
        <div class="col-8">
            <img src="../assets/img/GameOver.png">
        </div>
    </div>
    <?php
    include("inc/footer.php");
    ?>
<?php
// Utilisation de session_start pour manipuler les variables de $_SESSION : Creation / Manipulation
session_start();

// Require du Controller respectif
require_once "../controller/login-controller.php";
?>
<?php include ("../inc/header.php");?>
<body class="d-flex flex-column min-vh-100 log">
    <!-- Formulaire de connexion -->
    <form action="" method="POST">
        <h1 class="text-center bg-light p-3 my-5 text-dark">Connexion au site</h1>
        <div class="row justify-content-center pt-2 text-dark">
            <div class="col-lg-3 col-10 bg-light border border-secondary rounded shadow p-4">

                <div class="my-2">
                    <label for="login">Identifiant</label><span class="ms-2 text-danger"><?= isset($errors['login']) ? $errors['login'] : '' ?></span>
                    <br>
                    <input type="text" id="login" name="login" placeholder="ex. DURANT">
                </div>

                <div class="my-2">
                    <label for="password">Mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                    <br>
                    <input type="password" id="password" name="password">
                </div>
                <div class="mt-4">
                    <input type="checkbox" id="stayConnected" name="stayConnected">
                    <label for="stayConnected">Rester connecté</label>
                </div>
                <button class="btn btn-dark my-3">Connexion</button>
                <div class="text-center">
                    <a class="text-decoration-none text-secondary" href="home.php">Retour <i class="bi bi-house-heart-fill"></i> Accueil</a>
                </div>

            </div>

        </div>
    </form>

    <?php include '../inc/footer.php' ?>

</body>

</html>
</div>
<footer class="row flex-wrap justify-content-between align-items-center py-2 px-5 my-3 mb-2 <?= (isset($_SESSION['USER']) && isset($_COOKIE["whiteTheme"]) && $_COOKIE["whiteTheme"] == "on") ? "bg-light"  : "bg-dark" ?>">
    <div class="col-md-4 d-flex align-items-center justify-content-center">
        <span class="mb-3 mb-md-0 <?= (isset($_SESSION['USER']) && isset($_COOKIE["whiteTheme"]) && $_COOKIE["whiteTheme"] == "on") ? "text-dark" : "text-light" ?>">&copy; 2022 Company, Inc</span>
    </div>
    <ul class="nav col-md-4 me-2 justify-content-end list-unstyled d-flex">
        <li class=" <?= (isset($_SESSION['USER']) && isset($_COOKIE["whiteTheme"]) && $_COOKIE["whiteTheme"] == "on") ? "text-dark" : "text-light" ?>">Mentions Légales</li>
        <li class="ms-3 logo-reseaux"><a class="text-light" href="#"><img class="reseaux" src="../assets/img/logo-twitch.png" alt=""></a></li>
        <li class="ms-3 logo-reseaux"><a class="text-light" href="#"><img class="reseaux" src="../assets/img/logo-yt.png" alt=""></a></li>
        <li class="ms-3 logo-reseaux"><a class="text-light" href="#"><img class="reseaux" src="../assets/img/logo-discord.png" alt=""></a></li>
    </ul>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../assets/js/script.js"></script>
</body>
<html>
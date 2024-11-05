<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <script src="asset/js/bootstrap.min.js"></script>
    <title>Sanction GAUDPER</title>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark text-bg-dark fixed-top">
    <img src="asset/image/LogoGAUDPER-removebg-preview.png" style="height: 80px" class="ms-4 mb-1">
    <h1 class="ms-2">Sanction GAUDPER</h1>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-5">
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php?route=accueil">Accueil</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">

            <?php if (empty($_SESSION)) : ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="exemple.html">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="exemple.html">Crée un compte</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="exemple.html">Déconnexion</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
</header>

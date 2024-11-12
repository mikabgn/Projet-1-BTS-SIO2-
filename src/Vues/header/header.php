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

    <nav class='navbar navbar-expand-md bg-black fixed-top'>
        <img src="asset/image/LogoGAUDPER-removebg-preview.png" style="height: 80px" class="ms-4 mb-1">
        <h1 class="ms-2 text-white">Sanction GAUDPER</h1>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class="navbar-nav">
                    <li class="nav-item ms-2">
                        <a class="nav-link text-white" href="index.php?route=accueil">Accueil</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <?php if (empty($_SESSION)) : ?>
                        <li class="nav-item ms-2">

                            <a class="nav-link text-white" href="index.php?route=connexion">Connexion</a>

                        </li>
                        <li class="nav-item ms-2">

                            <a class="nav-link text-white" href="index.php?route=creationCompte">Crée un compte</a>

                        </li>
                    <?php else : ?>

                        <li class="nav-item">

                            <a class="nav-link text-white" href="index.php?route=deconnexion">Déconnexion</a>

                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='assets/css/bootstrap.min.css' rel='stylesheet'>
    <title>Site trop beau</title>
</head>
<body>
<header>
    <nav class='navbar navbar-expand-md bg-black fixed-top'>
        <img src='assets/img/LogoGAUDPER-removebg-preview.png' style='height: 80px' class='ms-4 mb-1'>
        <h1 class='ms-2 text-white'>Sanction GAUDPER</h1>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNav'>
            <ul class='navbar-nav'>
                <?php if (!isset($_SESSION["utilisateur"])): ?>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/connexion">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/inscription">Inscription</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="/deconnexion">Déconnexion</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>
<p>
<?= (isset($_SESSION["utilisateur"])) ? "Vous êtes connecté en tant que ".$_SESSION["utilisateur"]["prenom"] : "" ?>
</p>
<main class="content container mx-auto px-4 flex-grow">
    <?= $content ?>
</main>

<footer class='bg-dark text-white text-center py-2 fixed-bottom'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <p>&copy; 2024 Lycée Gaudper - Tous droits réservés</p>
            </div>
            <div class='col-md-12'>
                <div class='d-inline'>Contact</div>
                <a href='/legal' class='ms-2 text-white'>Mentions légales</a>
            </div>
            <div class='col-md-12 mt-4 me-2'>
                <a href='https://www.facebook.com/lycee.gaudper' class='text-white me-3'><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-facebook' viewBox='0 0 16 16'>
                        <path d='M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951'/>
                    </svg></a>
                <a href='https://twitter.com/lycee_gaudper' class='text-white me-3'><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-twitter-x' viewBox='0 0 16 16'>
                        <path d='M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z'/>
                    </svg></a>
                <a href='https://www.instagram.com/lycee_gaudper/' class='text-white'><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-instagram' viewBox='0 0 16 16'>
                        <path d='M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334'/>
                    </svg></a>
            </div>
        </div>
    </div>
</footer>
<script src='assets/js/bootstrap.min.js'></script>
</body>
</html>
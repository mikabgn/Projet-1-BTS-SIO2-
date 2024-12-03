<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='assets/css/bootstrap.min.css' rel='stylesheet'>
    <script src='assets/js/bootstrap.min.js'></script>
    <title>Inscription</title>
</head>
<body>
<div class="container mt-5">
    <h1 style="margin-top: 100px">Inscription</h1>

    <form action="" method="POST" class="mt-4">
        <?php if (isset($erreurs)): ?>
            <p class="form-text text-danger"><?= $erreurs ?></p>
        <?php endif; ?>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom *</label>
            <input type="nom" class="form-control <?= (isset($erreurs["nom"])) ? "border border-2 border-danger" : "" ?>"
                   name="nom"
                   id="nom"
                   placeholder="Un nom cool"
                   value=<?=(!empty($erreurs)) ? $_POST["nom"] : "" ?>
                   >
            <?php if (isset($erreurs["nom"])): ?>
                <p class="form-text text-danger"><?= $erreurs["nom"] ?></p>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom *</label>
            <input type="prenom" class="form-control <?= (isset($erreurs["prenom"])) ? "border border-2 border-danger" : "" ?>"
                   name="prenom"
                   id="prenom"
                   placeholder="Un prenom cool"
                   value=<?=(!empty($erreurs)) ? $_POST["prenom"] : "" ?>>
            <?php if (isset($erreurs["prenom"])): ?>
                <p class="form-text text-danger"><?= $erreurs["prenom"] ?></p>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="Email" class="form-label">Email *</label>
            <input type="email"
                   class="form-control <?= (isset($erreurs["email"])) ? "border border-2 border-danger" : "" ?>"
                   name="email"
                   id="Email"
                   placeholder="UnMailCool@gmail.com"
                   aria-describedby="emailHelp"
                   value=<?=(!empty($erreurs)) ? $_POST["email"] : "" ?>>
            <?php if (isset($erreurs["email"])): ?>
                <p class="form-text text-danger"><?= $erreurs["email"] ?></p>
            <?php endif; ?>
            <div id="emailHelp" class="form-text text-light">Nous ne divulguerons jamais votre adresse email</div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe *</label>
            <input type="password"
                   class="form-control <?= (isset($erreurs["password"])) ? "border border-2 border-danger" : "" ?>"
                   name="password"
                   id="password"
                   placeholder="Mot de passe">
            <?php if (isset($erreurs["password"])): ?>
                <div id="emailHelp" class="form-text text-danger"><?= $erreurs["password"] ?></div>
            <?php else: ?>
                <div id="emailHelp" class="form-text text-light">Votre mot de passe doit contenir au moins 8 caratères, doit
                    posséder au moins 1 majuscule, 1 minuscule et 1 chiffre
                </div>
            <?php endif; ?>

        </div>
        <div class="mb-3">
            <label for="confirmpassword" class="form-label">Confirmation mot de passe *</label>
            <input type="password"
                   class="form-control <?= (isset($erreurs["confirmpassword"])) ? "border border-2 border-danger" : "" ?>"
                   name="confirmpassword"
                   id="confirmpassword"
                   placeholder="Confirmer votre mot de passe">
            <?php if (isset($erreurs["confirmpassword"])): ?>
                <p class="form-text text-danger"><?= $erreurs["confirmpassword"] ?></p>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary">Valider</button>
    </form>

    <a href="/connexion" class="text-white btn btn-link mt-3">Déjà inscrit ? Connectez-vous</a>
</div>
</body>
</html>
<body>
<h1 class="text-center" style="margin-top: 100px">Importer une liste d'élèves</h1>
<form action="" enctype="multipart/form-data" method="post" class="mx-auto w-50 p-5" novalidate>
    <!-- Gestion des erreurs -->
    <?php if (isset($erreurs)): ?>
        <p class="text-center form-text alert alert-danger"><?= htmlspecialchars($erreurs) ?></p>
    <?php endif; ?>
    <?php if (isset($message)): ?>
        <p class="text-center form-text alert alert-success"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <!-- Sélection de la promotion -->
    <div>
        <label for="promotions" class="form-label mt-4">Promotions : *</label>
        <select class="form-select" id="promotions" name="promotions" required>
            <option value="">-- Sélectionner une promotion --</option>
            <?php foreach ($promotions as $promotion): ?>
                <option value="<?= htmlspecialchars($promotion->getId()) ?>">
                    <?= htmlspecialchars($promotion->getLibelle() . ' - ' . $promotion->getAnnee()) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- Téléchargement du fichier CSV -->
    <div class="mb-3 mt-3">
        <label for="listeEleve" class="form-label">Liste d'élèves : *</label>
        <input type="file"
               class="form-control"
               name="listeEleve"
               id="listeEleve"
               accept=".csv"
               required>
        <p class="form-text">Seuls les formats .csv sont acceptés.</p>
    </div>

    <!-- Bouton de soumission -->
    <button type="submit" class="btn btn-primary">Importer</button>
</form>
</body>
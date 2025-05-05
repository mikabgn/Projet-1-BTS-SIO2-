<h1 class="text-center" style="margin-top: 95px">Créer une sanction</h1>
<form action="" method="post" class="mx-auto w-50 p-5" novalidate>
    <?php if (!empty($erreurs)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($erreurs as $erreur): ?>
                    <li><?= htmlspecialchars($erreur) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if (isset($message)): ?>
        <p class="text-center alert alert-success"><?= $message ?></p>
    <?php endif; ?>

    <div>
        <label for="eleve" class="form-label">Élève sanctionné :</label>
        <select name="eleve" id="eleve" class="form-select" required>
            <option value="">-- Sélectionner un élève --</option>
            <?php foreach ($eleves as $eleve): ?>
                <option value="<?= $eleve->getId() ?>"><?= $eleve->getNom() . ' ' . $eleve->getPrenom() ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mt-3">
        <label for="demandeur" class="form-label">Nom du demandeur :</label>
        <input type="text" name="demandeur" id="demandeur" class="form-control" required>
    </div>

    <div class="mt-3">
        <label for="motif" class="form-label">Motif :</label>
        <select name="motif" id="motif" class="form-select">
            <option value="">-- Choisir un motif--</option>
            <?php foreach ($motifs as $motif): ?>
                <option value="<?= $motif->getId() ?>"><?= $motif->getLibelle() ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mt-3">
        <label for="descriptionMotif" class="form-label">Description du motif :</label>
        <textarea name="descriptionMotif" id="descriptionMotif" class="form-control"></textarea>
    </div>

    <div class="mt-3">
        <label for="dateIncident" class="form-label">Date de l'incident :</label>
        <input type="date" name="dateIncident" id="dateIncident" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary mt-3" style="margin-bottom: 135px" data-bs-toggle="modal" data-bs-target="#projetModalE1">Créer la sanction</button>

    <!-- Modal -->
    <div class="modal fade" id="projetModalE1" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h6 class="text-center alert alert-success">La sanction a été créée avec succès.</h6>
                </div>
            </div>
        </div>
    </div>
<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Motif;
use App\Entity\Sanction;
use App\UserStory\CreateSanction;
use DateTime;
use Doctrine\ORM\EntityManager;

class SanctionController extends AbstractController
{
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createSanction(): void
    {
        $erreurs = [];
        $_SESSION["success"] = "";
        $dateCreation = new \DateTime();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $eleveId = (int) $_POST['eleve'] ?? null;
            $motifId = (int) $_POST['motif'] ?? null;
            $descriptionMotif = $_POST['descriptionMotif'] ?? null;
            $dateIncident = $_POST['dateIncident'] ?? null;
            $demandeur = $_POST['demandeur'] ?? null;

            try {
                $sanctionService = new CreateSanction($this->entityManager);
                $sanctionService->execute($eleveId, $motifId, $descriptionMotif, $dateIncident, $dateCreation, $demandeur, 'admin');
                $_SESSION["success"] = "La sanction a été créée avec succès.";
                sleep(2.5);
                $this->redirect('/');
            } catch (\Exception $e) {
                $erreurs[] = $e->getMessage();
            }
        }

        $eleves = $this->entityManager->getRepository(Eleve::class)->findBy([]);
        $motifs = $this->entityManager->getRepository(Motif::class)->findBy([]);

        $this->render('sanction\creationSanction', [
            'erreurs' => $erreurs ?? null,
            'eleves' => $eleves,
            'motifs' => $motifs,
        ]);
    }
}
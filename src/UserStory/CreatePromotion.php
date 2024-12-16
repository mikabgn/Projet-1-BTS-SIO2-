<?php

namespace App\UserStory;

use App\Entity\Promotion;
use Doctrine\ORM\EntityManager;

class CreatePromotion{

    protected EntityManager $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function execute(string $libelle,int $annee){
        if (empty($libelle)||empty($annee)) {
            throw new \Exception("Veuillez remplir les champs obligatoires.");
        }
        if ($this->entityManager->getRepository(Promotion::class)->findOneBy(['libelle' => $libelle]) &&
            $this->entityManager->getRepository(Promotion::class)->findOneBy(['annee' => $annee])) {
            throw new \Exception("La promotion existe déjà");
        }
        $promotion = new Promotion();
        $promotion->setLibelle($libelle);
        $promotion->setAnnee($annee);

        $this->entityManager->persist($promotion);
        $this->entityManager->flush();

        return $promotion;
    }
}
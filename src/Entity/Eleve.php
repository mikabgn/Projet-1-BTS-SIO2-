<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'eleves')]
class Eleve
{
    #[ORM\Id]
    #[ORM\Column(name: 'id_eleve', type: 'integer')]
    #[ORM\GeneratedValue]
    protected string $idEleve;

    #[ORM\Column(name: 'nom_eleve', type: 'string', length: 50)]
    protected string $nomEleve;

    #[ORM\Column(name: 'prenom_eleve', type: 'string', length: 50)]
    protected string $prenomEleve;

    #[ORM\ManyToOne(targetEntity: Promotion::class)]
    #[ORM\joinColumn(name: 'id_promo',referencedColumnName: 'id_promo', nullable: false)]
    protected Promotion $promotion;

    public function getId(): int
    {
        return $this->idEleve;
    }

    public function setId(int $idEleve): void
    {
        $this->idEleve = $idEleve;
    }

    public function getNom(): string
    {
        return $this->nomEleve;
    }

    public function setNom(string $nomEleve): void
    {
        $this->nom = $nomEleve;
    }

    public function getPrenom(): string
    {
        return $this->prenomEleve;
    }

    public function setPrenom(string $prenomEleve): void
    {
        $this->prenom = $prenomEleve;
    }

    public function getIdPromotion(): Promotion
    {
        return $this->idPromo;
    }

    public function setIdPromotion(Promotion $idPromo): void
    {
        $this->idPromo = $idPromo;
    }

}

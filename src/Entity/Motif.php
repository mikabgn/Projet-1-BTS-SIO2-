<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'motifs')]
class Motif
{

    #[ORM\Id]
    #[ORM\Column(name:"id" ,type:"integer")]
    #[ORM\GeneratedValue]

    private int $id;


    #[ORM\Column(name:"libelle", type:"string", length:255)]

    private string $libelle;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }


}


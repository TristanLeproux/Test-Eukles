<?php

namespace App\Entity;

use App\Repository\MaterielRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=MaterielRepository::class)
 */
class Materiel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="integer")
     * @Assert\PositiveOrZero(message="Le prix doit être positif ou nul")
     */
    private $Prix;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="materiels")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Lien;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getLien(): ?Client
    {
        return $this->Lien;
    }

    public function setLien(?Client $Lien): self
    {
        $this->Lien = $Lien;

        return $this;
    }
}

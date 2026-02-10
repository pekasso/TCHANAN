<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
#[Broadcast]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $imageVideo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateMiseEnVente = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $datePeremption = null;

    #[ORM\Column]
    private ?float $prix = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getImageVideo(): ?string
    {
        return $this->imageVideo;
    }

    public function setImageVideo(string $imageVideo): static
    {
        $this->imageVideo = $imageVideo;

        return $this;
    }

    public function getDateMiseEnVente(): ?\DateTime
    {
        return $this->dateMiseEnVente;
    }

    public function setDateMiseEnVente(\DateTime $dateMiseEnVente): static
    {
        $this->dateMiseEnVente = $dateMiseEnVente;

        return $this;
    }

    public function getDatePeremption(): ?\DateTime
    {
        return $this->datePeremption;
    }

    public function setDatePeremption(\DateTime $datePeremption): static
    {
        $this->datePeremption = $datePeremption;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }
}

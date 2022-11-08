<?php

namespace App\Entity;

use App\Repository\SejourRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SejourRepository::class)]
class Sejour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateArr = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateSort = null;

    #[ORM\Column(length: 60)]
    private ?string $commentaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateArr(): ?\DateTimeInterface
    {
        return $this->dateArr;
    }

    public function setDateArr(\DateTimeInterface $dateArr): self
    {
        $this->dateArr = $dateArr;

        return $this;
    }

    public function getDateSort(): ?\DateTimeInterface
    {
        return $this->dateSort;
    }

    public function setDateSort(\DateTimeInterface $dateSort): self
    {
        $this->dateSort = $dateSort;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}

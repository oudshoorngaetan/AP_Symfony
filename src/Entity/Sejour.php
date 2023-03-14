<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Put;
use App\Entity\Lit;
use App\Repository\SejourRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: SejourRepository::class)]
#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => ['get'], "datetime_format" => "Y-m-d"]),
        new GetCollection(normalizationContext: ['groups' => ['get'], "datetime_format" => "Y-m-d"]),
        new Put(normalizationContext: ['groups' => ['put']])
    ]
)]
class Sejour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups(['get', 'put'])]
    private ?\DateTimeInterface $dateArr = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups(['get', 'put'])]
    private ?\DateTimeInterface $dateSort = null;

    #[ORM\Column(length: 60)]
    #[Groups(['get', 'put'])]
    private ?string $commentaire = null;

    #[ORM\ManyToOne(inversedBy: 'sejours')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['get', 'put'])]
    private ?Patient $patient = null;

    #[ORM\ManyToOne(inversedBy: 'sejours')]
    #[Groups(['get', 'put'])]
    private ?Lit $lit = null;

    #[ORM\Column]
    #[Groups(['get', 'put'])]
    private ?int $etat = null;

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

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    public function getLit(): ?Lit
    {
        return $this->lit;
    }

    public function setLit(?Lit $lit): self
    {
        $this->lit = $lit;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
}

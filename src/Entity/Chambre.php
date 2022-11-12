<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChambreRepository::class)]
class Chambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\ManyToOne(inversedBy: 'chambres')]
    private ?Service $service = null;

    #[ORM\ManyToMany(targetEntity: Lit::class, inversedBy: 'chambre')]
    private Collection $lit;

    public function __construct()
    {
        $this->lit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return Collection<int, Lit>
     */
    public function getLit(): Collection
    {
        return $this->lit;
    }

    public function addLit(Lit $lit): self
    {
        if (!$this->lit->contains($lit)) {
            $this->lit->add($lit);
        }

        return $this;
    }

    public function removeLit(Lit $lit): self
    {
        $this->lit->removeElement($lit);

        return $this;
    }
}
<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $file = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descrizione = null;

    #[ORM\ManyToMany(targetEntity: Statua::class, mappedBy: 'image')]
    private $statua;

    public function __construct()
    {
        $this->statua = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): static
    {
        $this->file = $file;

        return $this;
    }

    public function getDescrizione(): ?string
    {
        return $this->descrizione;
    }

    public function setDescrizione(?string $descrizione): static
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * @return Collection|Statua[]
     */
    public function getStatua(): Collection
    {
        return $this->statua;
    }

    public function addStatua(Statua $statua): self
    {
        if (!$this->statua->contains($statua)) {
            $this->statua[] = $statua;
            $statua->setImage($this);
        }

        return $this;
    }

    public function removeStatua(Statua $statua): self
    {
        if ($this->statua->removeElement($statua)) {
            // set the owning side to null (unless already changed)
            if ($statua->getImage() === $this) {
                $statua->setImage(null);
            }
        }

        return $this;
    }

    public function __toString() {
        return $this->file;
    }
}

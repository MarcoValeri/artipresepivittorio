<?php

namespace App\Entity;

use App\Repository\StatuaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatuaRepository::class)]
class Statua
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255)]
    private ?string $nome = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $descrizione = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $materiali = null;

    #[ORM\Column]
    private ?int $quantita = null;

    #[ORM\Column]
    private ?float $prezzo = null;

    #[ORM\Column]
    private ?float $spedizione = null;

    #[ORM\ManyToMany(targetEntity: Image::class, inversedBy: 'statua')]
    private $images;

    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getDescrizione(): ?string
    {
        return $this->descrizione;
    }

    public function setDescrizione(?string $descrizione): self
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    public function getMateriali(): ?string
    {
        return $this->materiali;
    }

    public function setMateriali(?string $materiali): static
    {
        $this->materiali = $materiali;

        return $this;
    }

    public function getQuantita(): ?int
    {
        return $this->quantita;
    }

    public function setQuantita(int $quantita): static
    {
        $this->quantita = $quantita;

        return $this;
    }

    public function getPrezzo(): ?float
    {
        return $this->prezzo;
    }

    public function setPrezzo(float $prezzo): static
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    public function getSpedizione(): ?float
    {
        return $this->spedizione;
    }

    public function setSpedizione(float $spedizione): static
    {
        $this->spedizione = $spedizione;

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        $this->images->removeElement($image);

        return $this;
    }

}

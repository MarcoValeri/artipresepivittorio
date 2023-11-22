<?php

namespace App\Entity;

use App\Repository\StatuaRepository;
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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $foto1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $foto2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $foto3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $foto4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $foto5 = null;

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

    public function getFoto1(): ?string
    {
        return $this->foto1;
    }

    public function setFoto1(?string $foto1): static
    {
        $this->foto1 = $foto1;

        return $this;
    }

    public function getFoto2(): ?string
    {
        return $this->foto2;
    }

    public function setFoto2(?string $foto2): static
    {
        $this->foto2 = $foto2;

        return $this;
    }

    public function getFoto3(): ?string
    {
        return $this->foto3;
    }

    public function setFoto3(?string $foto3): static
    {
        $this->foto3 = $foto3;

        return $this;
    }

    public function getFoto4(): ?string
    {
        return $this->foto4;
    }

    public function setFoto4(?string $foto4): static
    {
        $this->foto4 = $foto4;

        return $this;
    }

    public function getFoto5(): ?string
    {
        return $this->foto5;
    }

    public function setFoto5(?string $foto5): static
    {
        $this->foto5 = $foto5;

        return $this;
    }
}

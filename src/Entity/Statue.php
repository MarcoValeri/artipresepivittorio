<?php

namespace App\Entity;

use App\Repository\StatueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatueRepository::class)]
class Statue
{
    #[ORM\id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255)]
    private string $url;

    #[ORM\Column(length: 60)]
    private string $title;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column]
    private string $dimensions;

    #[ORM\Column]
    private float $price;

    #[ORM\Column]
    private string $imageOne;

    #[ORM\Column]
    private string $imageTwo;

    #[ORM\Column]
    private string $imageThree;

    #[ORM\Column]
    private string $imageFour;

    #[ORM\Column]
    private string $imageFive;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): ?self
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): ?self
    {
        $this->description = $description;
        return $this;
    }

    public function getDimensions(): ?string
    {
        return $this->dimensions;
    }

    public function setDimensions(string $dimensions): ?self
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(float $price): ?self
    {
        $this->price = $price;
        return $this;
    }

    public function getImageOne(): ?string
    {
        return $this->imageOne;
    }

    public function setImageOne(string $imageOne): ?self
    {
        $this->imageOne = $imageOne;
        return $this;
    }

    public function getImageTwo(): ?string
    {
        return $this->imageTwo;
    }

    public function setImageTwo(string $imageTwo): ?self
    {
        $this->imageTwo = $imageTwo;
        return $this;
    }

    public function getImageThree(): ?string
    {
        return $this->imageThree;
    }

    public function setImageThree(string $imageThree): ?self
    {
        $this->imageThree = $imageThree;
        return $this;
    }

    public function getImageFour(): ?string
    {
        return $this->imageFour;
    }

    public function setImageFour(string $imageFour): ?self
    {
        $this->imageFour = $imageFour;
        return $this;
    }

    public function getImageFive(): ?string
    {
        return $this->imageFive;
    }

    public function setImageFive(string $imageFive): ?self
    {
        $this->imageFive = $imageFive;
        return $this;
    }

}
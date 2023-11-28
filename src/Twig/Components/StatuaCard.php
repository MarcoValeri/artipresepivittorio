<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class StatuaCard
{
    public string $name;
    public string $url;
    public string $description;
    public string $quantity;
    public string $price;
    public string $shipping;
    public string $image;
}
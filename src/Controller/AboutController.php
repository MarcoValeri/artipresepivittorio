<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/chi-sono', name: 'app_about')]
    public function about()
    {
        return $this->render('pages/about.html.twig');
    }
}
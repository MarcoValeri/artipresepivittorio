<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contatti', name: 'app_contact')]
    public function about()
    {
        return $this->render('pages/contact.html.twig');
    }
}
<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\RegistrationForm;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/admin/user-registration', name: 'app_user_registration')]
    public function registration(UserPasswordHasherInterface $passwordHasher, Request $request, ManagerRegistry $doctrine)
    {
        $registrationForm = $this->createForm(RegistrationForm::class);
        $registrationForm->handleRequest($request);

        if ($registrationForm->isSubmitted() && $registrationForm->isValid()) {
            // Get form inputs
            $registrationFormEmail = $registrationForm->get('email')->getData();
            $registrationFormRole = $registrationForm->get('role')->getData();
            $registrationFormPassword = $registrationForm->get('password')->getData();

            // Create a new user
            $newUser = new User();
            $newUser->setEmail($registrationFormEmail);
            $newUser->setRoles([$registrationFormRole]);
            $newUser->setPassword($passwordHasher->hashPassword($newUser, $registrationFormPassword));

            // Save data to the db
            $em = $doctrine->getManager();
            $em->persist($newUser);
            $em->flush();

            return $this->redirect($this->generateUrl('app_home'));
        }

        return $this->render('admin/register-user.html.twig', [
            'registrarionForm' => $registrationForm->createView()
        ]);
    }
}
<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label'             => 'Email',
                'required'          => true,
                'invalid_message'   => 'Email is not valid'
            ])
            ->add('role', ChoiceType::class, [
                'label'     => 'Role',
                'required'  => true,
                'choices'   => [
                    'ROLE_ADMIN'    => 'ROLE_ADMIN',
                    'ROLE_USER'     => 'ROLE_USER'
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type'              => PasswordType::class,
                'required'          => true,
                'first_options'     => ['label' => 'Password'],
                'second_options'    => ['label' => 'Password Repeat']
            ])
            ->add('register', SubmitType::class, [
                'label' => 'Register'
            ])
            ->getForm();
    }
}
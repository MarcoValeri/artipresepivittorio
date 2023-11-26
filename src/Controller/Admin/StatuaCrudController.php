<?php

namespace App\Controller\Admin;

use App\Entity\Statua;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class StatuaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Statua::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nome'),
        ];
    }
}
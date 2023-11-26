<?php

namespace App\Controller\Admin;

use App\Entity\Statua;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\TextEditorType;

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
            TextField::new('url'),
            TextEditorField::new('descrizione'),
            TextEditorField::new('materiali'),
            IntegerField::new('quantita'),
            NumberField::new('prezzo'),
            NumberField::new('spedizione'),
            AssociationField::new('images')
            ->setFormTypeOptions([
                'by_reference' => false,
            ]),
        ];
    }
}
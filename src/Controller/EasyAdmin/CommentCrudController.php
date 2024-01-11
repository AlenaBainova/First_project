<?php

namespace App\Controller\EasyAdmin;

use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CommentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comment::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            EmailField::new('email'),
            TextareaField::new('comment', 'Комментарий'),
            DateTimeField::new('createdAt', 'Дата создания')
                ->hideOnForm(),
            AssociationField::new('status', 'Статус'),
            AssociationField::new('author', 'Автор')
                ->hideOnForm()
        ];
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('status');
    }

}

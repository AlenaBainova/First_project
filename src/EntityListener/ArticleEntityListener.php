<?php

declare(strict_types=1);

namespace App\EntityListener;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Events;
use Symfony\Bundle\SecurityBundle\Security;

#[AsEntityListener(event: Events::prePersist, method: 'prePersist', entity: Article::class)]

class ArticleEntityListener
{
    public function __construct(
        private readonly Security $security)
    {
    }

    public function prePersist(PrePersistEventArgs $entity): void
    {
       /** @var Article $entity */
       $entity = $entity->getObject();
       $entity->setCreatedAt(new \DateTimeImmutable());
       $entity->setAuthor($this->security->getUser());
    }
}
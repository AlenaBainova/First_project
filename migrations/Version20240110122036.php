<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240110122036 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        foreach (['new', 'published', 'rejected'] as $commentStatus) {
            $this->addSql('INSERT INTO comment_status (name) values (:name)', ['name' => $commentStatus]);
        }
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE comment_status');
    }
}

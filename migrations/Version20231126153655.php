<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231126153655 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE statua ADD image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE statua ADD CONSTRAINT FK_88B914543DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE INDEX IDX_88B914543DA5256D ON statua (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE statua DROP FOREIGN KEY FK_88B914543DA5256D');
        $this->addSql('DROP INDEX IDX_88B914543DA5256D ON statua');
        $this->addSql('ALTER TABLE statua DROP image_id');
    }
}

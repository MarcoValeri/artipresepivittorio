<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231122221348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE statua ADD url VARCHAR(255) NOT NULL, ADD descrizione LONGTEXT DEFAULT NULL, ADD materiali LONGTEXT DEFAULT NULL, ADD quantita INT NOT NULL, ADD prezzo DOUBLE PRECISION NOT NULL, ADD spedizione DOUBLE PRECISION NOT NULL, ADD foto1 VARCHAR(255) DEFAULT NULL, ADD foto2 VARCHAR(255) DEFAULT NULL, ADD foto3 VARCHAR(255) DEFAULT NULL, ADD foto4 VARCHAR(255) DEFAULT NULL, ADD foto5 VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE statua DROP url, DROP descrizione, DROP materiali, DROP quantita, DROP prezzo, DROP spedizione, DROP foto1, DROP foto2, DROP foto3, DROP foto4, DROP foto5');
    }
}

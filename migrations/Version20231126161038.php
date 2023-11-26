<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231126161038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE statua_image (statua_id INT NOT NULL, image_id INT NOT NULL, INDEX IDX_C226D84891E79FA9 (statua_id), INDEX IDX_C226D8483DA5256D (image_id), PRIMARY KEY(statua_id, image_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE statua_image ADD CONSTRAINT FK_C226D84891E79FA9 FOREIGN KEY (statua_id) REFERENCES statua (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE statua_image ADD CONSTRAINT FK_C226D8483DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE statua DROP FOREIGN KEY FK_88B914543DA5256D');
        $this->addSql('DROP INDEX IDX_88B914543DA5256D ON statua');
        $this->addSql('ALTER TABLE statua DROP image_id, DROP foto1, DROP foto2, DROP foto3, DROP foto4, DROP foto5');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE statua_image DROP FOREIGN KEY FK_C226D84891E79FA9');
        $this->addSql('ALTER TABLE statua_image DROP FOREIGN KEY FK_C226D8483DA5256D');
        $this->addSql('DROP TABLE statua_image');
        $this->addSql('ALTER TABLE statua ADD image_id INT DEFAULT NULL, ADD foto1 VARCHAR(255) DEFAULT NULL, ADD foto2 VARCHAR(255) DEFAULT NULL, ADD foto3 VARCHAR(255) DEFAULT NULL, ADD foto4 VARCHAR(255) DEFAULT NULL, ADD foto5 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE statua ADD CONSTRAINT FK_88B914543DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE INDEX IDX_88B914543DA5256D ON statua (image_id)');
    }
}

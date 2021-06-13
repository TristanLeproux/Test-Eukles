<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210612105104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materiel ADD lien_id INT NOT NULL');
        $this->addSql('ALTER TABLE materiel ADD CONSTRAINT FK_18D2B091EDAAC352 FOREIGN KEY (lien_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_18D2B091EDAAC352 ON materiel (lien_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B091EDAAC352');
        $this->addSql('DROP INDEX IDX_18D2B091EDAAC352 ON materiel');
        $this->addSql('ALTER TABLE materiel DROP lien_id');
    }
}

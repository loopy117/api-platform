<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241016103647 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liste ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE liste ADD status INT NOT NULL');
        $this->addSql('ALTER TABLE liste ADD CONSTRAINT FK_FCF22AF412469DE2 FOREIGN KEY (category_id) REFERENCES liste_category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_FCF22AF412469DE2 ON liste (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE liste DROP CONSTRAINT FK_FCF22AF412469DE2');
        $this->addSql('DROP INDEX IDX_FCF22AF412469DE2');
        $this->addSql('ALTER TABLE liste DROP category_id');
        $this->addSql('ALTER TABLE liste DROP status');
    }
}

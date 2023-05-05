<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230505080148 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rating_kinopoisk (id BIGSERIAL NOT NULL, kinopoisk_id BIGINT DEFAULT NULL, position INT NOT NULL, count_vote INT NOT NULL, rating_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_F5D405AA7078D953 ON rating_kinopoisk (kinopoisk_id)');
        $this->addSql('ALTER TABLE rating_kinopoisk ADD CONSTRAINT FK_F5D405AA7078D953 FOREIGN KEY (kinopoisk_id) REFERENCES kinopoisk (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE kinopoisk ADD created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE kinopoisk ADD updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rating_kinopoisk DROP CONSTRAINT FK_F5D405AA7078D953');
        $this->addSql('DROP TABLE rating_kinopoisk');
        $this->addSql('ALTER TABLE kinopoisk DROP created_at');
        $this->addSql('ALTER TABLE kinopoisk DROP updated_at');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230505061527 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE kinopoisk (id BIGINT NOT NULL, movie_id BIGINT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D6535FA08F93B6FC ON kinopoisk (movie_id)');
        $this->addSql('ALTER TABLE kinopoisk ADD CONSTRAINT FK_MOVIE_TO_KINOPOISK FOREIGN KEY (movie_id) REFERENCES movie (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE kinopoisk DROP CONSTRAINT FK_MOVIE_TO_KINOPOISK');
        $this->addSql('DROP TABLE kinopoisk');
    }
}

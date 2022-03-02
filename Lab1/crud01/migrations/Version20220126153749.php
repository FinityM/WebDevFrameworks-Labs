<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220126153749 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_444F97DDA23B42D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__phone AS SELECT id, manufacturer_id, model, memory FROM phone');
        $this->addSql('DROP TABLE phone');
        $this->addSql('CREATE TABLE phone (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, manufacturer_id INTEGER DEFAULT NULL, model VARCHAR(255) NOT NULL COLLATE BINARY, memory INTEGER NOT NULL, CONSTRAINT FK_444F97DDA23B42D FOREIGN KEY (manufacturer_id) REFERENCES make (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO phone (id, manufacturer_id, model, memory) SELECT id, manufacturer_id, model, memory FROM __temp__phone');
        $this->addSql('DROP TABLE __temp__phone');
        $this->addSql('CREATE INDEX IDX_444F97DDA23B42D ON phone (manufacturer_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__student AS SELECT id, age, name FROM student');
        $this->addSql('DROP TABLE student');
        $this->addSql('CREATE TABLE student (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, campus_id INTEGER DEFAULT NULL, age INTEGER NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, CONSTRAINT FK_B723AF33AF5D55E1 FOREIGN KEY (campus_id) REFERENCES campus (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO student (id, age, name) SELECT id, age, name FROM __temp__student');
        $this->addSql('DROP TABLE __temp__student');
        $this->addSql('CREATE INDEX IDX_B723AF33AF5D55E1 ON student (campus_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_444F97DDA23B42D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__phone AS SELECT id, manufacturer_id, model, memory FROM phone');
        $this->addSql('DROP TABLE phone');
        $this->addSql('CREATE TABLE phone (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, manufacturer_id INTEGER DEFAULT NULL, model VARCHAR(255) NOT NULL, memory INTEGER NOT NULL)');
        $this->addSql('INSERT INTO phone (id, manufacturer_id, model, memory) SELECT id, manufacturer_id, model, memory FROM __temp__phone');
        $this->addSql('DROP TABLE __temp__phone');
        $this->addSql('CREATE INDEX IDX_444F97DDA23B42D ON phone (manufacturer_id)');
        $this->addSql('DROP INDEX IDX_B723AF33AF5D55E1');
        $this->addSql('CREATE TEMPORARY TABLE __temp__student AS SELECT id, age, name FROM student');
        $this->addSql('DROP TABLE student');
        $this->addSql('CREATE TABLE student (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, age INTEGER NOT NULL, name VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO student (id, age, name) SELECT id, age, name FROM __temp__student');
        $this->addSql('DROP TABLE __temp__student');
    }
}

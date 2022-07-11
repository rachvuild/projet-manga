<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220708140145 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE opening (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opening_hero (opening_id INT NOT NULL, hero_id INT NOT NULL, INDEX IDX_B74BA8AD464F291F (opening_id), INDEX IDX_B74BA8AD45B0BCD (hero_id), PRIMARY KEY(opening_id, hero_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE opening_hero ADD CONSTRAINT FK_B74BA8AD464F291F FOREIGN KEY (opening_id) REFERENCES opening (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE opening_hero ADD CONSTRAINT FK_B74BA8AD45B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opening_hero DROP FOREIGN KEY FK_B74BA8AD464F291F');
        $this->addSql('DROP TABLE opening');
        $this->addSql('DROP TABLE opening_hero');
    }
}

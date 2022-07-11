<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220708135818 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opening_account DROP FOREIGN KEY FK_495CF824464F291F');
        $this->addSql('ALTER TABLE opening_hero DROP FOREIGN KEY FK_B74BA8AD464F291F');
        $this->addSql('DROP TABLE opening');
        $this->addSql('DROP TABLE opening_account');
        $this->addSql('DROP TABLE opening_hero');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE opening (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE opening_account (opening_id INT NOT NULL, account_id INT NOT NULL, INDEX IDX_495CF8249B6B5FBA (account_id), INDEX IDX_495CF824464F291F (opening_id), PRIMARY KEY(opening_id, account_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE opening_hero (opening_id INT NOT NULL, hero_id INT NOT NULL, INDEX IDX_B74BA8AD45B0BCD (hero_id), INDEX IDX_B74BA8AD464F291F (opening_id), PRIMARY KEY(opening_id, hero_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE opening_account ADD CONSTRAINT FK_495CF8249B6B5FBA FOREIGN KEY (account_id) REFERENCES account (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE opening_account ADD CONSTRAINT FK_495CF824464F291F FOREIGN KEY (opening_id) REFERENCES opening (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE opening_hero ADD CONSTRAINT FK_B74BA8AD464F291F FOREIGN KEY (opening_id) REFERENCES opening (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE opening_hero ADD CONSTRAINT FK_B74BA8AD45B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
    }
}

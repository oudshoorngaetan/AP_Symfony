<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221112144603 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personnel ADD email_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personnel ADD CONSTRAINT FK_A6BCF3DEA832C1C9 FOREIGN KEY (email_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A6BCF3DEA832C1C9 ON personnel (email_id)');
        $this->addSql('ALTER TABLE user ADD personnel_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6491C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6491C109075 ON user (personnel_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personnel DROP FOREIGN KEY FK_A6BCF3DEA832C1C9');
        $this->addSql('DROP INDEX UNIQ_A6BCF3DEA832C1C9 ON personnel');
        $this->addSql('ALTER TABLE personnel DROP email_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6491C109075');
        $this->addSql('DROP INDEX UNIQ_8D93D6491C109075 ON user');
        $this->addSql('ALTER TABLE user DROP personnel_id');
    }
}

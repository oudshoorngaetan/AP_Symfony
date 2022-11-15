<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221115125855 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chambre (id INT AUTO_INCREMENT NOT NULL, service_id INT DEFAULT NULL, numero INT NOT NULL, INDEX IDX_C509E4FFED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chambre_lit (chambre_id INT NOT NULL, lit_id INT NOT NULL, INDEX IDX_5A92649C9B177F54 (chambre_id), INDEX IDX_5A92649C278B5057 (lit_id), PRIMARY KEY(chambre_id, lit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lit (id INT AUTO_INCREMENT NOT NULL, numero INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, telephone VARCHAR(10) NOT NULL, adresse VARCHAR(40) NOT NULL, ville VARCHAR(30) NOT NULL, cp VARCHAR(5) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personnel (id INT AUTO_INCREMENT NOT NULL, role_id INT DEFAULT NULL, email_id INT DEFAULT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, INDEX IDX_A6BCF3DED60322AC (role_id), UNIQUE INDEX UNIQ_A6BCF3DEA832C1C9 (email_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sejour (id INT AUTO_INCREMENT NOT NULL, patient_id INT NOT NULL, lit_id INT DEFAULT NULL, date_arr DATE NOT NULL, date_sort DATE NOT NULL, commentaire VARCHAR(60) NOT NULL, INDEX IDX_96F520286B899279 (patient_id), INDEX IDX_96F52028278B5057 (lit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, personnel_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D6491C109075 (personnel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FFED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE chambre_lit ADD CONSTRAINT FK_5A92649C9B177F54 FOREIGN KEY (chambre_id) REFERENCES chambre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE chambre_lit ADD CONSTRAINT FK_5A92649C278B5057 FOREIGN KEY (lit_id) REFERENCES lit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE personnel ADD CONSTRAINT FK_A6BCF3DED60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE personnel ADD CONSTRAINT FK_A6BCF3DEA832C1C9 FOREIGN KEY (email_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE sejour ADD CONSTRAINT FK_96F520286B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE sejour ADD CONSTRAINT FK_96F52028278B5057 FOREIGN KEY (lit_id) REFERENCES lit (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6491C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chambre DROP FOREIGN KEY FK_C509E4FFED5CA9E6');
        $this->addSql('ALTER TABLE chambre_lit DROP FOREIGN KEY FK_5A92649C9B177F54');
        $this->addSql('ALTER TABLE chambre_lit DROP FOREIGN KEY FK_5A92649C278B5057');
        $this->addSql('ALTER TABLE personnel DROP FOREIGN KEY FK_A6BCF3DED60322AC');
        $this->addSql('ALTER TABLE personnel DROP FOREIGN KEY FK_A6BCF3DEA832C1C9');
        $this->addSql('ALTER TABLE sejour DROP FOREIGN KEY FK_96F520286B899279');
        $this->addSql('ALTER TABLE sejour DROP FOREIGN KEY FK_96F52028278B5057');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6491C109075');
        $this->addSql('DROP TABLE chambre');
        $this->addSql('DROP TABLE chambre_lit');
        $this->addSql('DROP TABLE lit');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE personnel');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE sejour');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

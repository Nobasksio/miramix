<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190901135551 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE renter (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, floor INT NOT NULL, description LONGTEXT DEFAULT NULL, logo VARCHAR(255) NOT NULL, logo_grey VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, sort INT NOT NULL, instagram VARCHAR(255) DEFAULT NULL, vk VARCHAR(255) DEFAULT NULL, facebook VARCHAR(255) DEFAULT NULL, active TINYINT(1) NOT NULL, link VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE renter_category (renter_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_BF94C22BE289A545 (renter_id), INDEX IDX_BF94C22B12469DE2 (category_id), PRIMARY KEY(renter_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE slider (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(255) NOT NULL, link VARCHAR(255) DEFAULT NULL, sort INT NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, date DATETIME NOT NULL, preview VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, instagram VARCHAR(255) DEFAULT NULL, vk VARCHAR(255) DEFAULT NULL, facebook VARCHAR(255) DEFAULT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news_renter (news_id INT NOT NULL, renter_id INT NOT NULL, INDEX IDX_4D3F96EB5A459A0 (news_id), INDEX IDX_4D3F96EE289A545 (renter_id), PRIMARY KEY(news_id, renter_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, sort INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plus (id INT AUTO_INCREMENT NOT NULL, plus LONGTEXT NOT NULL, active TINYINT(1) NOT NULL, sort INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE social_media (id INT AUTO_INCREMENT NOT NULL, renter_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, INDEX IDX_20BC159EE289A545 (renter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE action (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, date_start DATETIME NOT NULL, date_finish DATETIME DEFAULT NULL, link VARCHAR(255) DEFAULT NULL, photo_big VARCHAR(255) DEFAULT NULL, photo_small VARCHAR(255) DEFAULT NULL, active TINYINT(1) NOT NULL, instagram VARCHAR(255) DEFAULT NULL, vk VARCHAR(255) DEFAULT NULL, facebook VARCHAR(255) DEFAULT NULL, sort INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE action_renter (action_id INT NOT NULL, renter_id INT NOT NULL, INDEX IDX_4A4A0B719D32F035 (action_id), INDEX IDX_4A4A0B71E289A545 (renter_id), PRIMARY KEY(action_id, renter_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE map_place (id INT AUTO_INCREMENT NOT NULL, renter_id INT DEFAULT NULL, floor INT NOT NULL, UNIQUE INDEX UNIQ_F4EB1CA1E289A545 (renter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plainpage (id INT AUTO_INCREMENT NOT NULL, name LONGTEXT NOT NULL, text LONGTEXT NOT NULL, active TINYINT(1) NOT NULL, link_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subscriber (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, email VARCHAR(255) NOT NULL, date_subscribe DATETIME NOT NULL, activate TINYINT(1) NOT NULL, date_activate DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE feedback (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, type INT NOT NULL, text LONGTEXT NOT NULL, file VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE renter_category ADD CONSTRAINT FK_BF94C22BE289A545 FOREIGN KEY (renter_id) REFERENCES renter (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE renter_category ADD CONSTRAINT FK_BF94C22B12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE news_renter ADD CONSTRAINT FK_4D3F96EB5A459A0 FOREIGN KEY (news_id) REFERENCES news (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE news_renter ADD CONSTRAINT FK_4D3F96EE289A545 FOREIGN KEY (renter_id) REFERENCES renter (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE social_media ADD CONSTRAINT FK_20BC159EE289A545 FOREIGN KEY (renter_id) REFERENCES renter (id)');
        $this->addSql('ALTER TABLE action_renter ADD CONSTRAINT FK_4A4A0B719D32F035 FOREIGN KEY (action_id) REFERENCES action (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE action_renter ADD CONSTRAINT FK_4A4A0B71E289A545 FOREIGN KEY (renter_id) REFERENCES renter (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE map_place ADD CONSTRAINT FK_F4EB1CA1E289A545 FOREIGN KEY (renter_id) REFERENCES renter (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE renter_category DROP FOREIGN KEY FK_BF94C22BE289A545');
        $this->addSql('ALTER TABLE news_renter DROP FOREIGN KEY FK_4D3F96EE289A545');
        $this->addSql('ALTER TABLE social_media DROP FOREIGN KEY FK_20BC159EE289A545');
        $this->addSql('ALTER TABLE action_renter DROP FOREIGN KEY FK_4A4A0B71E289A545');
        $this->addSql('ALTER TABLE map_place DROP FOREIGN KEY FK_F4EB1CA1E289A545');
        $this->addSql('ALTER TABLE news_renter DROP FOREIGN KEY FK_4D3F96EB5A459A0');
        $this->addSql('ALTER TABLE renter_category DROP FOREIGN KEY FK_BF94C22B12469DE2');
        $this->addSql('ALTER TABLE action_renter DROP FOREIGN KEY FK_4A4A0B719D32F035');
        $this->addSql('DROP TABLE renter');
        $this->addSql('DROP TABLE renter_category');
        $this->addSql('DROP TABLE slider');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE news_renter');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE plus');
        $this->addSql('DROP TABLE social_media');
        $this->addSql('DROP TABLE action');
        $this->addSql('DROP TABLE action_renter');
        $this->addSql('DROP TABLE map_place');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE plainpage');
        $this->addSql('DROP TABLE subscriber');
        $this->addSql('DROP TABLE feedback');
    }
}

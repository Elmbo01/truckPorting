<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124122927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final,imagen) values (1, 'Flagstar Bancorp, Inc.', 'Maumbawa', '10-23-2021', '3-17-2021','http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif,imagen) values (1, 'Bubbletube', 'Major Pharmaceuticals', 'Bhldq0y', '444-827-1550', '5610144770463297362','http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (1, 'SCBCU7ZA5AC018941', false, '3500 Club Coupe', 1, 3443.5, 1,'http://dummyimage.com/208x100.png/cc0000/ffffff')");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}

<?php

declare(strict_types=1);

namespace Midiauai\ACL\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240522212140 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create table role';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $role = $schema->createTable('role');

        $role->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $role->addColumn('nome', Types::STRING)->setLength(57);
        $role->addColumn('description', Types::STRING)->setLength(307);
        $role->addColumn('created_at', Types::DATE_MUTABLE);

        $role->setPrimaryKey(['id']);

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $schema->dropTable('role');
    }
}

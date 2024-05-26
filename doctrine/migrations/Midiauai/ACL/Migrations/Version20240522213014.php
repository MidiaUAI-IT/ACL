<?php

declare(strict_types=1);

namespace Midiauai\ACL\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240522213014 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create Permission Table';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $permission = $schema->createTable('permission');

        $permission->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $permission->addColumn('controller', Types::STRING)->setLength(70);
        $permission->addColumn('actions', Types::STRING)->setLength(307);
        $permission->addColumn('created_at', Types::DATE_MUTABLE);

        $permission->setPrimaryKey(['id']);

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $schema->dropTable('permission');
    }
}

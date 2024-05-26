<?php

declare(strict_types=1);

namespace Midiauai\ACL\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240522215528 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create table permission_role.';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $permissionRole = $schema->createTable('permission_role');

        $permissionRole->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $permissionRole->addColumn('permission_id', Types::INTEGER);
        $permissionRole->addColumn('role_id', Types::INTEGER);
        $permissionRole->addColumn('created_at', Types::DATE_MUTABLE);

        // $permissionRole->addForeignKeyConstraint('permission',['permission_id'], ['id']);
        // $permissionRole->addForeignKeyConstraint('role',['role_id'], ['id']);
        $permissionRole->setPrimaryKey(['id']);

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $schema->dropTable('permission_role');
    }
}

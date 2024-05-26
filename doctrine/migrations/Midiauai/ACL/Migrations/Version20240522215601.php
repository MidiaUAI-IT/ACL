<?php

declare(strict_types=1);

namespace Midiauai\ACL\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240522215601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create table user_role.';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $userRole = $schema->createTable('user_role');

        $userRole->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $userRole->addColumn('user_id', Types::INTEGER);
        $userRole->addColumn('role_id', Types::INTEGER);
        $userRole->addColumn('created_at', Types::DATE_MUTABLE);

        // $userRole->addForeignKeyConstraint('role',['role_id'], ['id'], ["onDelete" => "CASCADE"]);
        // $userRole->addForeignKeyConstraint('users',['user_id'], ['id'], ["onDelete" => "CASCADE"]);
        $userRole->setPrimaryKey(['id']);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $schema->dropTable('user_role');
    }
}

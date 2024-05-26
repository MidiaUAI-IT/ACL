<?php

declare(strict_types=1);

namespace Midiauai\ACL\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240521231347 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Users table';
    }

    public function up(Schema $schema): void
    {
        $users = $schema->createTable('users');

        $users->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $users->addColumn('user_name', Types::STRING);
        $users->addColumn('created_at', Types::DATE_MUTABLE);

        $users->setPrimaryKey(['id']);
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('users');
    }
}

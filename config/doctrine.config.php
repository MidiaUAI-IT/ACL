<?php

namespace Midiauai\ACL;

return [
  'doctrine' => [
    // migrations configuration
    'migrations_configuration' => [
      'orm_default' => [
        'table_storage' => [
          'table_name' => 'doctrine_migration_midiauai_acl',
          'version_column_name' => 'version',
          'version_column_length' => 191,
          'executed_at_column_name' => 'executed_at',
          'execution_time_column_name' => 'execution_time',
        ],
        'migrations_paths' => [
          'Midiauai\ACL\Migrations' => __DIR__ . '/../doctrine/migrations/Midiauai/ACL/Migrations',
        ],
        'all_or_nothing' => true,
        'transactional' => true,
        'check_database_platform' => true,
        'organize_migrations' => 'none',
        'connection' => null,
        'em' => null,
      ],
    ],

    // migrations commands base config
    'migrations_cmd' => [
      'current' => [],
      'dumpschema' => [],
      'diff'     => [],
      'generate' => [],
      'execute'  => [],
      'latest'   => [],
      'list' => [],
      'migrate'  => [],
      'rollup' => [],
      'status'   => [],
      'syncmetadatastorage' => [],
      'uptodate' => [],
      'version'  => [],
    ],
    'driver' => [
      // defines an annotation driver with two paths, and names it `my_annotation_driver`
      __NAMESPACE__ . '_driver' => [
        'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
        'cache' => 'array',
        'paths' => [
          __DIR__ . '/../src/Entity',
          // __DIR__ . '/../src/' . __NAMESPACE__ . '/Entity'
        ],
      ],

      // default metadata driver, aggregates all other drivers into a single one.
      // Override `orm_default` only if you know what you're doing
      'orm_default' => [
        'drivers' => [
          // register `my_annotation_driver` for any entity under namespace `My\Namespace`
          __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
        ],
      ],
    ],
  ]
];

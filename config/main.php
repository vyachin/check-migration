<?php

use app\components\FakeDatabaseCommand;
use yii\db\Connection;

return [
    'id' => 'check-migrations',
    'basePath' => dirname(__DIR__),
    'container' => [
        'definitions' => [
            FakeDatabaseCommand::class => [
                'bigTables' => ['table1'],
            ],
        ],
    ],
    'components' => [
        'db' => [
            'class' => Connection::class,
            'dsn' => 'mysql:host=localhost;dbname=test',
            'username' => 'root',
            'password' => 'qweasdzxc',
            'enableLogging' => true,
            'enableProfiling' => true,
            'commandClass' => FakeDatabaseCommand::class,
        ],
    ],
];
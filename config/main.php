<?php

use app\components\FakeDatabaseCommand;
use app\components\MigrateCommand;
use yii\console\controllers\MigrateController;
use yii\db\Connection;

return [
    'id' => 'check-migrations',
    'basePath' => dirname(__DIR__),
    'container' => [
        'definitions' => [
            FakeDatabaseCommand::class => [
                'bigTables' => ['table1'],
            ],
            MigrateController::class => [
                'class' => MigrateCommand::class,
            ],
        ],
    ],
    'components' => [
        'db' => [
            'class' => Connection::class,
            'dsn' => 'mysql:host=127.0.0.1;dbname=test',
            'username' => 'root',
            'password' => 'qweasdzxc',
            'enableLogging' => true,
            'enableProfiling' => true,
        ],
    ],
];
<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Hide index.php
            'showScriptName' => false,
            // Use pretty URLs
            'enablePrettyUrl' => true,
            'rules' => [
            ],
        ],

        'mongodb' => [
            'class' => '\yii\mongodb\Connection',
            'dsn' => 'mongodb://mongo:27017/statsdigital',
        ],
        'authManager' => [
            //'class' => 'yii\rbac\MongoDbManager',
            //'defaultRoles' => ['guest'],
            'class' => 'yii\rbac\DbManager',
        ],


    ],
    
];

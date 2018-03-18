<?php
use common\Constants;

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'timeZone' => 'US/Central',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport'=>[
                'class'=>'Swift_SmtpTransport',
                'host'=>Constants::SMTP_HOST,
            ]
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            //'useFileTransport' => true,
        ],
    ],
    'params' => $params,
];

$config['components'] = $config['components'] + $db;

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1'],
        'generators' => [
            'model'   => [
                'class'     => 'yii\gii\generators\model\Generator',
                'templates' => ['bison' => '@common/templates/generators']
            ]
        ]
    ];

    $config['components']['mailer']['messageConfig'] = [
        'to' => ['webservices@bisontransport.com' => 'Web Services'],
    ];
}


return $config;
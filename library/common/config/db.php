<?php

$sqlServers = [
    'dbSqlimageBisonweb' => [
        'dsn' => 'sqlsrv:Server=192.168.0.7;Database=Bisonweb',
    ],
    'dbSqlimageHr' => [
        'dsn' => 'sqlsrv:Server=192.168.0.7;Database=hr',
    ],
    'dbSqlimageOtherbison' => [
        'dsn' => 'sqlsrv:Server=192.168.0.7;Database=otherbison',
    ],
    'dbSqlimageSqlimage' => [
        'dsn' => 'sqlsrv:Server=192.168.0.7;Database=sqlimage',
    ],
    'dbSqlimageWebradius' => [
        'dsn' => 'sqlsrv:Server=192.168.0.7;Database=WEBRADIUS',
    ],
    'dbSqlserverBisonweb' => [
        'dsn' => 'sqlsrv:Server=192.168.0.14;Database=bisonweb',
    ],
    'dbSqlserverPsbison' => [
        'dsn' => 'sqlsrv:Server=192.168.0.14;Database=psBison',
    ],
    'dbSqlserverBison' => [
        'dsn' => 'sqlsrv:Server=192.168.0.14;Database=bison',
    ],
    'dbSqlserverDriverservice' => [
        'dsn' => 'sqlsrv:Server=192.168.0.14;Database=driverservice',
    ],
    'dbDynamicsgpBt' => [
        'dsn' => 'sqlsrv:Server=192.168.0.22;Database=bt',
    ],
    'dbAnalytics2012Analytics' => [
        'dsn' => 'sqlsrv:Server=192.168.0.26;Database=analytics',
    ],
    'dbTmtTmwamsbison' => [
        'dsn' => 'sqlsrv:Server=192.168.0.60;Database=TMWAMS_bison',
    ],
//    'dbPstrainingBisonweb' => [
//        'dsn' => 'sqlsrv:Server=192.168.0.75;Database=bisonWeb',
//    ],
    'dbAnalyticssqlPsanalytics' => [
        'dsn' => 'sqlsrv:Server=192.168.0.193;Database=psAnalytics',
    ],
];

$defaults = [
    'class' => 'yii\db\Connection',
    'username' => 'web',
    'password' => 'pw101random',
    'charset' => 'utf8',
    'tablePrefix' => '',
    'schemaMap' => [
        'sqlsrv'=> [ 'class'=>'yii\db\mssql\Schema', ]
    ],
];

foreach ($sqlServers as &$sqlServer) {
    foreach ($defaults AS $k => $v) {
        if (!isset($sqlServer[$k])) {
            $sqlServer[$k] = $v;
        }
    }
}

return $sqlServers;

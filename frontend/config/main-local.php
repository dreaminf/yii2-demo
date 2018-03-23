<?php

$config = [
    'components' => [
//        'db_demo'=>[
//            'class' => 'yii\db\Connection',
//            'dsn' => 'mysql:host=localhost;dbname=yiidemo',
//            'username' => 'root',
//            'password' => 'root',
//            'charset' => 'utf8',
//        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'csbnIDHtwEVVTar63sg7bhhJFThS1ykW',
        ],

        'formatter' => [
            'dateFormat' => 'yyyy年MM月dd日',
            'datetimeFormat' => 'yyyy年MM月dd日  HH时mm分ss秒',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'CNY',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;

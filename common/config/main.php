<?php
return [
    //设置时区
    'timeZone'=>'Asia/Shanghai',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

//        公用文件内开启url美化
          'urlManager' => [
              'enablePrettyUrl' => true, //开启url美化
              'showScriptName' => false, //不用输入入口文件index.php
              'suffix'=>'.html',//开启伪静态
              'rules' => [
              ],
          ],
    ],
];

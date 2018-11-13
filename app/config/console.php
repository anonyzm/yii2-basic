<?php
$config = \yii\helpers\ArrayHelper::merge(
    require (__DIR__ . '/common.php'),
    [
        'id' => 'yii2-console',
        'controllerNamespace' => 'app\console',
        'aliases' => [
            '@tests' => '@app/tests',
        ],
        'components' => [

        ],
        /*
        'controllerMap' => [
            'fixture' => [ // Fixture generation command line.
                'class' => 'yii\faker\FixtureController',
            ],
        ],
        */
    ]
);

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;

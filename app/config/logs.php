<?php
return [
    'targets' => [
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning'],
            'logFile' => '@runtime/log/error.log',
        ],
    ]
];
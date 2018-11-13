<?php
require __DIR__ . '/../vendor/autoload.php';
require_once(__DIR__ . '/../dotenv.php');
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();

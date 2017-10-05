<?php

# composer autoload
require __DIR__.'/../vendor/autoload.php';

# dotenv autoload
require __DIR__ . '/environment/autoload.php';

# configs
$autoloads['config'] = [
    'app' => require __DIR__.'/../config/app.php',
    'database' => require __DIR__.'/../config/database.php',
];

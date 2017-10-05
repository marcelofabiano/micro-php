<?php

# composer autoload
require __DIR__.'/../vendor/autoload.php';

# dotenv autoload
$basePath = __DIR__ . '/../';

$dotenv = new \Dotenv\Dotenv($basePath);
$dotenv->load();

# configs
$autoloads['config'] = [
    'app' => require __DIR__.'/../config/app.php',
    'database' => require __DIR__.'/../config/database.php',
];

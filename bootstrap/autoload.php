<?php

# composer autoload
require __DIR__.'/../vendor/autoload.php';

# dotenv autoload
$basePath = __DIR__ . '/../';

# Var Env
$dotenv = new \Dotenv\Dotenv($basePath);
$dotenv->load();

# whoops PHP errors for cool kids
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

# configs
$autoloads['config'] = [
    'basePath' => $basePath,
    'app' => require __DIR__.'/../config/app.php',
    'database' => require __DIR__.'/../config/database.php',
];

<?php

# composer autoload
require __DIR__.'/../vendor/autoload.php';

# Dotenv
$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

# configs
$config['settings'] = require __DIR__.'/../config/app.php';

$app = new \Slim\App($config);

return $app;

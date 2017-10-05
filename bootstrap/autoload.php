<?php

# composer autoload
require __DIR__.'/../vendor/autoload.php';

# Dotenv
$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

# configs app
$configs = require __DIR__ . '/../config/app.php';

return $configs;

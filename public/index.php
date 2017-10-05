<?php

$app = require __DIR__.'/../bootstrap/autoload.php';

$container = $app->getContainer();

$container['db'] = function ($c) {
    $db = $c['settings']['database'][getenv('DB_CONNECTION')];
    $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'], $db['username'], $db['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

print_r($container->get('db'));

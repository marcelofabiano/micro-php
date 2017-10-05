<?php

return [
    'mysql' => [
        'host'=> getenv('DB_HOST', 'localhost'),
        'dbname' => getenv('DB_NAME'),
        'username' => getenv('DB_USERNAME'),
        'password' => getenv('DB_PASSWORD'),
    ]
];

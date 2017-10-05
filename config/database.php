<?php

return [
    'mysql' => [
        'host'=> getenv('DB_HOST', 'localhost'),
        'database' => getenv('DB_DATABASE'),
        'username' => getenv('DB_USERNAME'),
        'password' => getenv('DB_PASSWORD'),
    ]
];

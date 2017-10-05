<?php

# Encoding para scripts
mb_internal_encoding(getenv('APP_ENCODING', 'UTF-8'));

# Encoding para enviar para saída
mb_http_output(getenv('APP_ENCODING', 'UTF-8'));

return [
    'displayErrorDetails' => getenv('APP_DEBUG', false),
    'logger' => require __DIR__.'/../config/log.php',
    'database' => require __DIR__.'/../config/database.php',
];

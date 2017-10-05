<?php

# Environment configs
$env = require __DIR__ . '/../bootstrap/environment/autoload.php';

# Configurações básicas da aplicação
$configs = [
    'name'=> getenv('APP_NAME', 'micro-php'),
    'encoding' => getenv('APP_ENCODING', 'UTF-8'),
    'error_reporting' => $env['error_reporting']
];

# conexão padrão do banco de dados
$database = require __DIR__.'/database.php';

$configs['database'] = $database[$env['database']];

# Encoding para scripts
mb_internal_encoding($configs['encoding']);

# Encoding para enviar para saída
mb_http_output($configs['encoding']);

# Nível da saída de erros
ini_set('error_reporting', $configs['error_reporting']);

return $config;

<?php

# Configurações básicas da aplicação
$config['app'] = [
    'name'=> getenv('APP_NAME', 'micro-php'),
    'encoding' => getenv('APP_ENCODING', 'UTF-8'),
    'error_reporting' => getenv('APP_DEBUG', E_ALL)
];

# Encoding para scripts
mb_internal_encoding($config['app']['encoding']);

# Encoding para enviar para saída
mb_http_output($config['app']['encoding']);

# Nível da saída de erros
ini_set('error_reporting', $config['app']['error_reporting']);

return $config;

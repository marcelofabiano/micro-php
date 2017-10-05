<?php

# Configurações básicas da aplicação
$config['app'] = [
    'name'=> getenv('APP_NAME', 'micro-php'),
    'encoding' => getenv('APP_ENCODING', 'UTF-8')
];

# Diz para o PHP que estamos usando strings UTF-8 até o final do script
mb_internal_encoding($config['app']['encoding']);

# Diz para o PHP que nós vamos enviar uma saída UTF-8 para o navegador
mb_http_output($config['app']['encoding']);

return $config;

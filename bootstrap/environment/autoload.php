<?php

switch (getenv('APP_ENV')) {
    case 'development':
        return require __DIR__.'/development.php';
        break;
    case 'test':
        return require __DIR__.'/test.php';
        break;
    case 'production':
        return require __DIR__.'/production.php';
        break;
    default:
        return 'Ambiente não definido!';
        break;
}

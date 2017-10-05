<?php

# Whoops!
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

return [
    'database' => getenv('DB_CONNECTION'),
    'error_reporting' => E_ALL,
];

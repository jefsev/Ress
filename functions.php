<?php

use Nomix\Inc\Collecter;

require_once __DIR__ . '/vendor/autoload.php';

// Register theme files from /app
return Collecter::collectFiles([
    'setup',
    'helpers',
    'routes/head',
    'routes/auth',
    'routes/nav',
]);

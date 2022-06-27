<?php
require_once __DIR__ . '/vendor/autoload.php';

use Ress\Inc\Collecter;

// Register theme files from /app
return Collecter::collectFiles([
    'setup',
    'config',
    'helpers',
    'routes/head',
    'routes/auth',
    'routes/nav',
]);

<?php

require_once __DIR__.'/vendor/autoload.php';
use app\core\Application;

$app = new Application();

$app->router->get('/', function() {
    return 'Home Page';
});

$app->router->get('/contact', function() {
    return 'Contact Page';
});


$app->run();
<?php

$app = new Application();

$app->router->get('/', function() {
    return 'Home route';
});
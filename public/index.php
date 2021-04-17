<?php

use Core\Application;

require __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->router->get('/', 'App\Controller\ContactController@index');
$app->router->get('/contact/:id', 'App\Controller\ContactController@show');

/* $app->router->post('/create', 'ContactController@create'); */

$app->run();

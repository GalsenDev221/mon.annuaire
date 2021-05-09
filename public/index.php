<?php

use Core\Application;

require __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->router->get('/', 'App\Controller\ContactController@index');
$app->router->get('/add', 'App\Controller\ContactController@add');
$app->router->post('/store', 'App\Controller\ContactController@store');
$app->router->get('/contact/:id', 'App\Controller\ContactController@show');
$app->router->get('/edit/contact/:id', 'App\Controller\ContactController@edit');
$app->router->post('/edit/contact/:id', 'App\Controller\ContactController@update');
$app->router->post('/contact/:id', 'App\Controller\ContactController@destroy');
$app->router->post('/search', 'App\Controller\ContactController@search');

$app->run();

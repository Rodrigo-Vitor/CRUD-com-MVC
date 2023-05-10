<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsersController@add');
$router->post('/novo', 'UsersController@addAction');

$router->get('/usuario/{id}/editar', 'UsersController@edit');
$router->post('/usuario/{id}/editar', 'UsersController@editAction');


$router->get('/usuario/{id}/excluir', 'UsersController@delete');

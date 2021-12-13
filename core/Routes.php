<?php
use Route\Router;

$router = new Router();

$router->get('/', 'LoginController@index');
$router->get('/register', 'RegisterController@index');
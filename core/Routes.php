<?php
use Route\Router;

$router = new Router();

$router->get('/', 'LoginController@index');
$router->post('/', 'LoginController@logInto');

$router->get('/register', 'RegisterController@index');
$router->post('/register', 'RegisterController@register');

$router->get('/home', 'HomeController@index');
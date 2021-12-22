<?php
use Route\Router;

$router = new Router();

$router->get('/', 'LoginController@index');
$router->post('/', 'LoginController@logInto');
$router->get('/logout', 'LoginController@logout');
$router->get('/content-login', function() {
  Core\Application::render('ContentLoginView');
});

$router->get('/register', 'RegisterController@index');
$router->post('/register', 'RegisterController@register');

$router->get('/home', 'HomeController@index');
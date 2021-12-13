<?php
//Chama a classe com as configurações da aplicação
require_once 'init.php';

//Inicia a sessão do usuario
session_start();

//Chama a classe de rotas
require_once __PATH__ . '/router/Router.php';

//Define a URI base da aplicação
define('URI_BASE', str_replace('index.php', '', str_replace(' ', '%20', $_SERVER['PHP_SELF'])));

//Ajusta a URI para redirecionar
$request_uri = '/' . str_replace(URI_BASE, '', $_SERVER['REQUEST_URI']);

$router = new Route\Router;
$router->run($request_uri);

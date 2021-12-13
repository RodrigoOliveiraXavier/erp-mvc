<?php
//Chama a classe com as configurações da aplicação
require_once 'init.php';

//Inicia a sessão do usuario
session_start();

//Define a URI base da aplicação
define('URI_BASE', str_replace('index.php', '', str_replace(' ', '%20', $_SERVER['PHP_SELF'])));

//Chama a classe de rotas
require_once __PATH__. '/core/Routes.php';

$router->run( $router->routes );
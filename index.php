<?php
//Valida se os arquivos de log do PHP estão criados
if (!is_dir('tmp/')) {
  mkdir('tmp/');
}
if (!is_file('tmp/php_errors.log')) {
  fopen('tmp/php_errors.log', 'w');
}

//Seta o arquivo de log do php
ini_set('error_log', 'tmp/php_errors.log');

//Define a constante de configuraçães da aplicação
define('APPLICATION', parse_ini_file(__DIR__ . '/app/config/application.ini', true));
//Define o ambiente da aplicação
define('ENVIRONMENT', 'development');
//Define o caminho da pasta raiz da aplicação (apenas para apoio no código)
define('__PATH__', __DIR__);
//Define a classe de autoload do PHP
define('AUTOLOAD_CLASS', __DIR__ . '/vendor/autoload.php');

//Caso ambiente de desenvolviento define as configurações de erros
if (ENVIRONMENT == 'development') {
  error_reporting(E_ALL);
  ini_set('display_errors', true);
}

//Inclui a classe de autoload
require_once(AUTOLOAD_CLASS);
//Inclui o arquivo de conexão do banco
require_once(__DIR__ . '/app/config/config.php');

//Inicia a sessão do usuario
session_start();

//Chama a classe de rotas
require_once __PATH__ . '/router/Router.php';

//Define a URI base da aplicação
define('URI_BASE', str_replace('index.php','',str_replace(' ', '%20', $_SERVER['PHP_SELF'])));

//Ajusta a URI para redirecionar
$request_uri = '/'.str_replace(URI_BASE, '', $_SERVER['REQUEST_URI']);

$router = new Route\Router;
$router->run($request_uri);
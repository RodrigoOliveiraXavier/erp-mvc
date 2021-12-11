<?php

//Define as configurações de erros
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('error_log', 'tmp/php_errors.log');

//Define as constantes
define('ENVIRONMENT', 'development');
define('__PATH__', __DIR__);
define('URI_DEVELOPMENT', 'projetos-estudos%20pessoais/so-mais-um-teste/');
define('APPLICATION_FILE', __DIR__ . '/app/config/application.ini');
define('AUTOLOAD_CLASS', __DIR__ . '/vendor/autoload.php');

//Inclui a classe de autoload e a classe para conexão do banco
require_once(AUTOLOAD_CLASS);
require_once(__DIR__ . '/app/config/config.php');

//Inicia a sessão do usuario
session_start();

//Salva as configurações da aplicação em uma variavel global
global $application;
$application = parse_ini_file(APPLICATION_FILE, true);

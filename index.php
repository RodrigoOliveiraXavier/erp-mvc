<?php
//Define as configurações de erros
error_reporting(E_ALL);
ini_set('display_errors', true);

//Valida se os arquivos de log do PHP estão criados
if (!is_dir('tmp/')) {
  mkdir('tmp/');
}
if (!is_file('tmp/php_errors.log')) {
  fopen('tmp/php_errors.log', 'w');
}

//Seta o arquivo de log do php
ini_set('error_log', 'tmp/php_errors.log');

//Define as constantes
define('APPLICATION', parse_ini_file(__DIR__ . '/app/config/application.ini', true));
define('ENVIRONMENT', 'development');
define('__PATH__', __DIR__);
define('AUTOLOAD_CLASS', __DIR__ . '/vendor/autoload.php');

//Inclui a classe de autoload e a classe para conexão do banco
require_once(AUTOLOAD_CLASS);
require_once(__DIR__ . '/app/config/config.php');

//Inicia a sessão do usuario
session_start();
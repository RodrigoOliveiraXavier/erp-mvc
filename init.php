<?php
if (version_compare(PHP_VERSION, '7.3.0') == -1) {
  die('A versão mínima necessária para o PHP é 7.1.0');
}

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

//Define o timezone da aplicação
date_default_timezone_set(APPLICATION['general']['timezone']);
setlocale(LC_ALL, 'pt_BR.utf-8');

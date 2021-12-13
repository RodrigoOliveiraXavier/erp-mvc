<?php
$config = array();
if (ENVIRONMENT == 'development') {
  $config['tipo_banco'] = 'MYSQL';
  $config['service_name'] = 'so-mais-um-teste';
  $config['host'] = 'localhost';
  $config['port'] = 3306;
  $config['user'] = 'root';
  $config['pass'] = '';
} elseif (ENVIRONMENT == 'production') {
  $config['tipo_banco'] = 'MYSQL';
  $config['service_name'] = 'so-mais-um-teste';
  $config['host'] = 'localhost';
  $config['port'] = 3306;
  $config['user'] = 'root';
  $config['pass'] = '';
}

define('DB_CONFIG', $config);
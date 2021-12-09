<?php
global $config;
$config = array();
if (ENVIRONMENT == 'development') {
  $config['service_name'] = 'so-mais-um-teste';
  $config['host'] = 'localhost';
  $config['port'] = 3306;
  $config['user'] = 'root';
  $config['pass'] = '';
} elseif (ENVIRONMENT == 'production') {
  $config['service_name'] = 'so-mais-um-teste';
  $config['host'] = 'localhost';
  $config['port'] = 3306;
  $config['user'] = 'root';
  $config['pass'] = '';
}

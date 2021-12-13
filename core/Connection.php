<?php

namespace Core;

final class Connection
{
  private static $connection;

  private function __construct()
  {
  }

  private function __clone()
  {
  }

  private function __wakeup()
  {
  }

  /**
   * Método estático privado que gera as configurações com o banco de dados
   * @return array
   */
  private static function load(): array
  {
    if (!DB_CONFIG) {
      require_once(__PATH__ . '/app/config/config.php');
    }

    $dados = DB_CONFIG;
    return $dados;
  }

  /**
   * Método privado que monta a conexão com o banco de dados
   * @param $dados array
   * @return PDO
   */
  private static function make(array $dados): \PDO
  {
    //Captura dados
    $tipo_banco = isset($dados['tipo_banco']) ? $dados['tipo_banco'] : NULL;
    $user = isset($dados['user']) ? $dados['user'] : NULL;
    $pass = isset($dados['pass']) ? $dados['pass'] : NULL;
    $service_name = isset($dados['service_name']) ? $dados['service_name'] : NULL;
    $host = isset($dados['host']) ? $dados['host'] : NULL;
    $port = isset($dados['port']) ? $dados['port'] : NULL;

    //Valida o tipo de banco e retorna o objeto PDO
    if (!is_null($tipo_banco)) {
      switch (strtoupper($tipo_banco)) {
        case 'MYSQL':
          $port = isset($port) ? $port : 3306;
          return new \PDO("mysql:host={$host};port={$port};dbname={$service_name}", $user, $pass);
          break;
        case 'MSSQL':
          $port = isset($port) ? $port : 1433;
          return new \PDO("mssql:host={$host},{$port};dbname={$service_name}", $user, $pass);
          break;
        case 'PGSQL':
          $port = isset($port) ? $port : 5432;
          return new \PDO("pgsql:dbname={$service_name}; user={$user}; password={$pass}, host={$host};port={$port}");
          break;
        case 'SQLITE':
          return new \PDO("sqlite:{$service_name}");
          break;
        case 'OCI8':
          return new \PDO("oci:dbname={$service_name}", $user, $pass);
          break;
        case 'FIREBIRD':
          return new \PDO("firebird:dbname={$service_name}", $user, $pass);
          break;
      }
    } else {
      throw new \Exception('Erro: tipo de banco de dados não informado');
    }
  }

  /**
   * Método estático que abre a transação com o banco de dados
   */
  public static function open(): \PDO
  {
    if (self::$connection == NULL) {
      //Gera o arquivo de conexão
      self::load();
      //Monta a conexão a partir do arquivo gerado
      self::$connection = self::make(DB_CONFIG);
      //Define os atributos de erro
      self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      //Seta o charset da conexão
      self::$connection->exec("set names utf8");
    }
    return self::$connection;
  }
}

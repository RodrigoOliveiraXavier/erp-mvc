<?php

namespace Route;

require_once __PATH__ . "/router/RouteSwitch.php";

class Router extends RouteSwitch
{
  /**
   * Redireciona o usuario para a rota passada
   * @param string $request_uri
   */
  public function run(string $request_uri)
  {
    $route = substr($request_uri, 1);

    if ($route === '') {
      $this->login();
    } else {
      $this->$route();
    }
  }
}

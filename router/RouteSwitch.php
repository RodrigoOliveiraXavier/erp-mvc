<?php

namespace Route;

abstract class RouteSwitch
{
  /**
   * Caso a rota passada não exista é lançado o codigo de erro 404
   */
  public function __call($name, $arguments)
  {
    http_response_code(404);
    require __PATH__ . '/app/views/NotFound.php';
  }

  /**
   * Direciona o usuario para a tela de login
   */
  protected function login()
  {
    require __PATH__ . '/app/views/LoginView.php';
  }

  /**
   * Direciona o usuario para a tela de registro
   */
  protected function register()
  {
    require __PATH__ . '/app/views/RegisterView.php';
  }

  private function validate()
  {
    if ($_SESSION['logged'] === true) {
      return true;
    }
    return false;
  }
}
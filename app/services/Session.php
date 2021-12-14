<?php

namespace App\Services;

class Session
{
  /**
   * Starta a sessão do usuário
   */
  public function __construct()
  {
    try {
      session_start();
      return true;
    } catch (\Exception $e) {
      return false;
    }
  }

  /**
   * Salva um valor na sessão atual
   */
  public static function setValue($name, $value)
  {
    try {
      if (!empty($name) && !empty($value)) {
        $_SESSION[$name] = $value;
        return true;
      } else {
        return false;
      }
    } catch (\Exception $e) {
      return false;
    }
  }

  /**
   * Pega um valor na sessão atual
   */
  public static function getValue($name)
  {
    try {
      if (!empty($name)) {
        if (isset($_SESSION[$name])) {
          return $_SESSION[$name];
        } else {
          return false;
        }
      } else {
        return false;
      }
    } catch (\Exception $e) {
      return false;
    }
  }

  /**
   * Destroi a sessão atual
   */
  public static function destroySession()
  {
    try {
      session_destroy();
      return true;
    } catch (\Exception $e) {
      return false;
    }
  }
}

<?php

namespace App\Controllers;

use Core\Controller;

class LoginController extends Controller
{
  public function index()
  {
    $this->loadView('LoginView');
  }

  public function loginto()
  {
    echo 'oto logando';
  }

  public function register()
  {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    $this->loadView('RegisterView');
  }
}

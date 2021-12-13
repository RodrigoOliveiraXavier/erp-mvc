<?php

namespace App\Controllers;

use Core\Controller;

class LoginController extends Controller
{
  public function index()
  {
    // echo "<pre>";
    // var_dump($_POST);
    // echo '</pre>';

    $this->render('LoginView');
  }

  public function loginto()
  {
    echo 'oto logando';
  }

  public function register()
  {
    $this->render('RegisterView');
  }
}

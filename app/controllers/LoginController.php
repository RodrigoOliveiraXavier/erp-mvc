<?php

namespace App\Controllers;

use Core\Controller;

class LoginController extends Controller
{
  public function index()
  {
    $email = 'teste@teste';
    $senha = 'teste';

    $this->render('LoginView', [
      'email' => $email,
      'senha' => $senha
    ]);
  }

  public function loginto()
  {
    echo 'oto logando';
  }
}

<?php

namespace App\Controllers;

class LoginController
{
  public function index() {
    include __PATH__.'\app\views\LoginView.php';
  }

  public function loginto() {
    echo 'oto logando';
  }

  public function register() {

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    
    include __PATH__.'\app\views\RegisterView.php';
  }
}

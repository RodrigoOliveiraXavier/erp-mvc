<?php

namespace App\Controllers;

use Core\Controller;

class RegisterController extends Controller
{
  public function index()
  {
    $this->render('RegisterView');
  }

  public function register()
  {
  }
}

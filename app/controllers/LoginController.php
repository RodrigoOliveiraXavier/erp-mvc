<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Users;

class LoginController extends Controller
{
  public function index()
  {
    $this->render('LoginView');
  }

  public function logInto()
  {
    $data = [
      'name' => $_POST['name'],
      'pass' => $_POST['password']
    ];

    $users  = Users::all("name = '".$data['name']."' and password = '".$data['pass']."'");

    if (empty($users)) {
      echo "<h3 style='color:red'>Usuario não encontrado, verifique a escrita ou <a href=".URI_BASE.'register'.">cadastre um novo usuário!</a></h3>";
    } else {
      $_SESSION['logged'] = true;
      header('Location: '.URI_BASE.'home');
    }

    $this->render('LoginView', $data);
  }
}

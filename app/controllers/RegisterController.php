<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Users;

class RegisterController extends Controller
{
  public function index()
  {
    $this->render('RegisterView');
  }

  public function register()
  {
    $data = [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'pass' => $_POST['password']
    ];

    $username = Users::all("name = '" . $data['name']."'");

    if ($username) {
      echo "<h3 style='color:red'>Nome de usuário já está em uso!</h3>";
    } else {
      $useremail = Users::all("email = '" . $data['email']."'");

      if ($useremail) {
        echo "<h3 style='color:red'>E-mail já está em uso!</h3>";
      } else {
        $user = new Users();
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->password = md5($data['pass']);

        $user->save();

        $_SESSION['logged'] = true;

        echo "<h3 style='color:green'>Usuário cadastrado com sucesso! <a href=".URI_BASE.">Acesse o sistema aqui!</a></h3>";
      }
    }

    $this->render('RegisterView', $data);
  }
}

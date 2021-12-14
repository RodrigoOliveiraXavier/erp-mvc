<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Users;
use App\Services\Session;

class RegisterController extends Controller
{
  public function index()
  {
    //Redireciona o usuário para o home caso ja tenha logado recentemente
    if (Session::getValue('logged') !== null && Session::getValue('logged')) {
      header('Location: ' . URI_BASE . 'home');
    }

    //Renderiza o form de registro
    $this->render('RegisterView');
  }

  public function register()
  {
    //Pega os dados enviado por requisição POST
    $data = [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'pass' => $_POST['password']
    ];

    //Valida se o nome de usuario já está sendo utilizado
    $username = Users::all("name = '" . $data['name'] . "'");

    if ($username) {
      echo "<h3 style='color:red'>Nome de usuário já está em uso!</h3>";
    } else {
      //Valida se o email já está sendo utilizado
      $useremail = Users::all("email = '" . $data['email'] . "'");

      if ($useremail) {
        echo "<h3 style='color:red'>E-mail já está em uso!</h3>";
      } else {
        //Salva o usuário no banco de dados
        $user = new Users();
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->password = md5($data['pass']);

        $user->save();

        Session::setValue('logged', true);
        echo "<h3 style='color:green'>Usuário cadastrado com sucesso! <a href=" . URI_BASE . ">Acesse o sistema aqui!</a></h3>";
      }
    }

    //Renderiza o form de registro
    $this->render('RegisterView', $data);
  }
}

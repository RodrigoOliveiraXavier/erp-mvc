<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Users;

class LoginController extends Controller
{
  public function index()
  {
    //Redireciona o usuário para o home caso ja tenha logado recentemente
    if (isset($_SESSION['logged']) && $_SESSION['logged']) {
      header('Location: ' . URI_BASE . 'home');
    }

    //Renderiza o form de login
    $this->render('LoginView');
  }

  public function logInto()
  {
    //Pega os dados enviado por requisição POST
    $data = [
      'name' => $_POST['name'],
      'pass' => $_POST['password']
    ];

    //Procura o usuario no banco
    $users  = Users::all("name = '" . $data['name'] . "' and password = '" . md5($data['pass']) . "'");

    //Valida se existe o usuario, se existir redireciona para a pagina home
    if (empty($users)) {
      echo "<h3 style='color:red'>Usuario não encontrado, verifique a escrita ou <a href=" . URI_BASE . 'register' . ">cadastre um novo usuário!</a></h3>";
    } else {
      $_SESSION['logged'] = true;
      header('Location: ' . URI_BASE . 'home');
    }

    //Renderiza o form de login
    $this->render('LoginView', $data);
  }
}

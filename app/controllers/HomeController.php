<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Users;

class HomeController extends Controller
{
  public function index()
  { 
    //Valida se o usuário está logado
    if (!isset($_SESSION['logged']) || !$_SESSION['logged']) {
      echo "<h3 style='color:red'>Você não está logado com nenhum usuário, para acessar o sistema é necessário logar! <a href=" . URI_BASE . ">Clique aqui para ser redirecionado!</a></h3>";
      $this->renderPartial('header');
      $this->renderPartial('footer');
    } else {
      //Renderiza a view do home
      $this->render('HomeView');
    }
  }
}

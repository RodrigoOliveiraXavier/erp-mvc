<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Users;

class HomeController extends Controller
{
  public function index()
  {
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    $this->render('HomeView');
  }
}

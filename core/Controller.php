<?php

namespace Core;

class Controller
{
  public function loadView($viewName, $viewData = array())
  {
    extract($viewData);
    include __PATH__ . '/app/views/' . $viewName . '.php';
  }
}

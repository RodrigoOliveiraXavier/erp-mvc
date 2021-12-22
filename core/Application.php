<?php

namespace Core;

class Application
{
  /**
   * Carrega a view passada
   */
  public static function render($viewName, $viewData = [])
  {
    if (file_exists(__PATH__ . '/template/' . APPLICATION['general']['template'] . "/views/" . $viewName . '.php')) {
      extract($viewData);
      // $render = fn($vN, $vD = []) => $this->renderPartial($vN, $vD);
      // $base = $this->getBaseUrl();
      require __PATH__ . '/template/' . APPLICATION['general']['template'] . "/views/" . $viewName . '.php';
    }
  }

  /**
   * Carrega o include do template selecionado pelo usuario
   */
  public static function renderPartial($includeName, $viewData = [])
  {
    if (file_exists(__PATH__ . '/template/' . APPLICATION['general']['template'] . '/includes/' . $includeName . '.php')) {
      extract($viewData);
      // $render = fn ($vN, $vD = []) => $this->renderPartial($vN, $vD);
      // $base = $this->getBaseUrl();
      require __PATH__ . '/template/' . APPLICATION['general']['template'] . '/includes/' . $includeName . '.php';
    }
  }
}

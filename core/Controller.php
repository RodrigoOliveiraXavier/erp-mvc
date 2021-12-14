<?php

namespace Core;

class Controller
{

    /**
     * Redireciona o controller para a URL base dele
     */
    protected function redirect($url)
    {
        header("Location: " . $this->getBaseUrl() . $url);
        exit;
    }

    /**
     * Pega a URL base do controller
     */
    private function getBaseUrl()
    {
        $base = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';
        $base .= $_SERVER['SERVER_NAME'];
        if ($_SERVER['SERVER_PORT'] != '80') {
            $base .= ':' . $_SERVER['SERVER_PORT'];
        }
        $base .= URI_BASE;

        return $base;
    }

    /**
     * Carrega a view passada
     */
    public function render($viewName, $viewData = [])
    {
        if (file_exists(__PATH__ . '/app/views/' . $viewName . '.php')) {
            extract($viewData);
            // $render = fn($vN, $vD = []) => $this->renderPartial($vN, $vD);
            // $base = $this->getBaseUrl();
            require __PATH__ . '/app/views/' . $viewName . '.php';
        }
    }
    
    /**
     * Carrega o include do template selecionado pelo usuario
     */
    public function renderPartial($includeName, $viewData = [])
    {
        if (file_exists(__PATH__ . '/template/' . APPLICATION['general']['template'] . '/includes/' . $includeName . '.php')) {
            extract($viewData);
            // $render = fn ($vN, $vD = []) => $this->renderPartial($vN, $vD);
            // $base = $this->getBaseUrl();
            require __PATH__ . '/template/' . APPLICATION['general']['template'] . '/includes/' . $includeName . '.php';
        }
    }
}

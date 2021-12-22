<?php

namespace Core;

use Core\Application;

class Controller extends Application
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
}

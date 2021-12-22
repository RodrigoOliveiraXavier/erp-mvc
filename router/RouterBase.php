<?php

namespace Route;

use Closure;
use Route\Request;

class RouterBase
{

    /**
     * Executa as rotas instanciadas no arquivo de rotas e faz o redirecionamento
     * para a rota passada na URL
     * @param $routes 
     */
    public function run($routes)
    {
        $method = Request::getMethod();
        $url = Request::getUrl();

        // Define os itens padrão
        $controller = ERROR_CONTROLLER;
        $action = DEFAULT_ACTION;
        $args = [];

        if (isset($routes[$method])) {
            foreach ($routes[$method] as $route => $callback) {
                // Identifica os argumentos e substitui por regex
                $pattern = preg_replace('(\{[a-z0-9]{1,}\})', '([a-z0-9-]{1,})', $route);

                // Faz o match da URL
                if (preg_match('#^(' . $pattern . ')*$#i', $url, $matches) === 1) {
                    array_shift($matches);
                    array_shift($matches);

                    // Pega todos os argumentos para associar
                    $itens = array();
                    if (preg_match_all('(\{[a-z0-9]{1,}\})', $route, $m)) {
                        $itens = preg_replace('(\{|\})', '', $m[0]);
                    }

                    // Faz a associação
                    $args = array();
                    foreach ($matches as $key => $match) {
                        $args[$itens[$key]] = $match;
                    }

                    if (gettype($callback) === 'object') {
                        return $callback($args);
                    } else {
                        // Seta o controller/action
                        $callbackSplit = explode('@', $callback);
                        $controller = $callbackSplit[0];
                        if (isset($callbackSplit[1])) {
                            $action = $callbackSplit[1];
                        }
                    }
                    break;
                }
            }
        }

        $controller = "\App\Controllers\\$controller";
        $definedController = new $controller();
        $definedController->$action($args);
    }
}

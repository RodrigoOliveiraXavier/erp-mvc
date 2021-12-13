<?php
namespace Route;

class Request {
    
    /**
     * Pega o método passado na URL
     */
    public static function getUrl() {
        //$url = filter_input(INPUT_GET, 'request');
        $url = $_SERVER['REQUEST_URI'];
        $url = str_replace(URI_BASE, '', $url);
        return '/'.$url;
    }

    /**
     * Pega o método utilizado (GET, POST, ETC...)
     */
    public static function getMethod() {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}
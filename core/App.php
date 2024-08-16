<?php

class App
{
    protected $controller = 'ShoppingListController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        $controllerLocation = "";

        if (isset($url[0]) && $url[0] !== null) {
            $controllerLocation = '../app/controllers/' . $url[0] . '.php';
        }

        if (file_exists($controllerLocation)) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // public function parseUrl()
    // {
    //     if (isset($_GET['url'])) {
    //         return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    //     }
    // }

    // Parse the URL into controller, method, and parameters
    public function parseUrl() {
        if (isset($_SERVER['REQUEST_URI'])) {
            $url = trim($_SERVER['REQUEST_URI'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            // Adjust for the public directory if necessary
            if ($url[0] === 'public') {
                array_shift($url);
            }
            return $url;
        }
        return [];
    }
    
}
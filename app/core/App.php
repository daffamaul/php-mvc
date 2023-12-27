<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class App
{

    protected $controller = "Home", $method = "index", $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        if ($url == null) {
            $url[0] = $this->controller;
        }

        if (file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = ucfirst($url[0]);
            array_shift($url);
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if (isset($url[0])) {
            if (method_exists($this->controller, $url[0])) {
                $this->method = $url[0];
                array_shift($url);
            }
        }

        if (!empty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
        // clearstatcache();
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}

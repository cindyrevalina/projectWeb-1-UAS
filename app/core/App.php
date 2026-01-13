<?php

class App {
    protected $controller = 'Auth'; 
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();

        // Path folder controller (tanpa S sesuai folder kamu)
        $controllerPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR;

        // 1. Cek apakah ada controller di URL
        if (isset($url[0])) {
            $checkFile = $controllerPath . ucfirst($url[0]) . '.php';
            if (file_exists($checkFile)) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            }
        }

        // 2. Panggil filenya
        $file = $controllerPath . $this->controller . '.php';
        
        if (file_exists($file)) {
            require_once $file;
        } else {
            // Jika masih error, ini akan memberi tahu kita file apa yang hilang
            die("FOLDER/FILE TIDAK DITEMUKAN! <br> PHP mencari di: <b>" . $file . "</b>");
        }
        
        $this->controller = new $this->controller;

        // 3. Cek Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // 4. Parameter
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return [$this->controller];
    }
}
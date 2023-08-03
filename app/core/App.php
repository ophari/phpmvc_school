<?php

class App{
        protected $controller = 'Home';
        protected $method = 'index';
        protected $param = [];

    public function __construct()
    {
        // controller
        $url = $this->parseURL();
        if(file_exists('../app/controllers/'.$url[0].'.php')){
            $this->controller = $url[0];
            unset($url[0]);
            // var_dump($url);
        }
        require_once "../app/controllers/" .$this->controller. ".php";
        $this->controller = new $this->controller;

        // method
        if(isset($url)){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // parameter
        if(!empty($url)){
            // var_dump($url);
            $this->param = array_values($url);
        }

        // menjalankan controller dan methode, dan  mengirimkan parameter jika ada

        call_user_func_array([$this->controller, $this->method], $this->param);
    }



    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url']);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    } 
} 
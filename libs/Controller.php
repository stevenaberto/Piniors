<?php

class Controller
{
    public $view;
    public $model;
    public $url;
    function __construct()
    {
        $this->url =  $_SERVER["REQUEST_URI"];
        $this->url = trim($this->url, "/");
        $this->url = explode("/", $this->url);
        $this->view = new View();
    }
    function loadModel($model){
        $url = 'models/'.$model.'model.php';

        if(file_exists($url)){
            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
    function render($name){
        $this->view->render($name);
    }
}

?>
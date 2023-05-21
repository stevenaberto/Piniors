<?php

class Admin extends Controller
{
    private $method;
    function __construct($method=null)
    {
        parent::__construct();
        $url =  $_SERVER["REQUEST_URI"];
        $url = trim($url, "/");
        $url = explode("/", $url);
        if (empty($url[1])) $this->admin();
    }

function admin(){
    $this->view->render("admin/index",1);
}

    function nuevapregunta(){
        $this->view->render("admin/nuevapregunta");
    }

    function listadopreguntas(){
        $this->view->render("admin/listadopreguntas");
    }

    function configuracion(){
        $this->view->render("admin/configuracion");
    }

    function cerrarsesion(){
        $this->view->render("admin/cerrarsesion");
    }

    function login(){
        $this->view->render("admin/login");
    }
}


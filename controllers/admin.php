<?php

class Admin extends Controller
{
    function __construct()
    {
        parent::__construct();
        
    }

function admin(){
    $this->view->render("admin/index");
}

    function nuevapregunta(){
        $this->view->render("admin/nuevapregunta");
        echo "Nueva preguna";
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


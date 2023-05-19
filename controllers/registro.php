<?php

class Registro extends Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->view->render("registro");
    }

    function login(){
        echo "Registrando...";
    }
}

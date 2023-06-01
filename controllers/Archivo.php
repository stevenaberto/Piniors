<?php

class Archivo extends Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->view->render("archivos/index");
    }
}

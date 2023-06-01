<?php

class Actividades extends Controller
{
    function __construct()
    {
        parent::__construct();
        if(isset($_SESSION["username"])) $this->view->render("actividades/index");
        else $this->view->render("login/index");
    }
}

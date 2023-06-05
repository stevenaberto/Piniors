<?php

class Actividades extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render("actividades/index");
    }
}

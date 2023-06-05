<?php

class Errores extends controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render("home/index");
    }
}

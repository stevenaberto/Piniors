<?php

class Errores extends controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render("404/index");
    }
}

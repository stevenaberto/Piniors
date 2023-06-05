<?php

class Memoria extends Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->view->render("memoria/index");
        $this->loadModel("activities");
    }

}
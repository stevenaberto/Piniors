<?php

class Lenguajes extends Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->view->render("lenguajes/index",1);
        $this->loadModel("activities");

    }

}
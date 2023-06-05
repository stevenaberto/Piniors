<?php

class Quiz extends Controller
{
    function __construct()
    {
        parent::__construct();
        if(empty($this->url[1])) $this->home();
    }
    function home()
    {
        $this->view->render("quiz/index",1);
    }
    function jugar()
    {
        $this->view->render("quiz/jugar",1);
    }
    function final()
    {
        $this->view->render("quiz/final",1);
    }
}
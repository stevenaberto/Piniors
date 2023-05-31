<?php

class Quiz extends Controller
{
    function __construct()
    {
        parent::__construct();
        if (empty($url[1])) $this->home();
    }
function home(){
    $this->view->render("quiz/index");
}
function jugar(){
    $this->view->render("quiz/jugar");
}
}

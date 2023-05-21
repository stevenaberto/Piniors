<?php

class Quiz extends Controller
{
    function __construct()
    {
        parent::__construct();
       
    }
function home(){
    $this->view->render("quiz/index");
}
}

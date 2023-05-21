<?php

class Quiz extends Controller
{
    function __construct()
    {
        parent::__construct();
        $url =  $_SERVER["REQUEST_URI"];
        $url = trim($url, "/");
        $url = explode("/", $url);
        if (empty($url[1])) $this->home();
    }
function home(){
    $this->view->render("quiz/index");
}
function jugar(){
    $this->view->render("quiz/jugar");
}
}

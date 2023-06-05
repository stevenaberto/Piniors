<?php

class Keyboard extends Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->view->render("keyboard/index",1);
        $this->loadModel("activities");
    }
    function addScore(){
        $id = $_SESSION["ID"];
        $score = $_POST["score"];
        if ($this->model->updateScore($score)) return "Score updated!";
        else return "Score didn't up to the db";
    }
}

<?php

class Cursos extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render("login");
    }

    function add()
    {
        // extract($_POST);

        if ($this->model->insert(['title' => "Aprende HTML5", 
        'banner'=> "/public/img/", 
        'descripcion'=>"aaaaa",
        "maestro"=>3, 
        'categoria'=>1])) {
            echo "Nuevo curso creado";
        }
    }
}

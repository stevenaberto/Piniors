<?php

class Login extends Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->view->render("login");
    }

    function signup()
    {
        extract($_POST);

        if ($this->model->insert(['title' => $title, 
        'banner'=> $banner, 
        'descripcion'=>$descripcion,
        "maestro"=>$maestro, 
        'categoria'=>$categoria])) {
            // echo "Nuevo curso creado";
        }
    }
    function login()
    {
        extract($_POST);

        if ($this->model->selectUser([
            'email' => "chrisjoseph380@gmail.com", 
            'password'=> md5("12345")])) {
            echo "Bienvenido de nuevo";
            header("location:/dashboard");
        } else {
            echo "Crea una cuenta";
        }
    }
}

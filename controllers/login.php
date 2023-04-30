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
<<<<<<< HEAD
            'email' => $email,
            'password'=> md5($password)])) {
=======
            'email' => "chrisjoseph380@gmail.com", 
            'password'=> md5("12345")])) {
>>>>>>> 5208665d3a1e88f530094ebf3a7129e10bb25aef
            echo "Bienvenido de nuevo";
            header("location:/dashboard");
        } else {
            echo "Crea una cuenta";
        }
    }
}

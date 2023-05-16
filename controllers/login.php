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

        if ($this->model->insert
        ([
        'name' => $name, 
        'username' => $username, 
        'email'=> $email, 
        'password'=>md5($password)])) {
            // echo "Nuevo curso creado";
        }
    }
    function login()
    {
        extract($_POST);

        if ($this->model->selectUser([
            'username' => $username,
            'password'=> md5($password)])) {
            echo "Bienvenido de nuevo";
            header("location: /home");
        } else {
            echo "Crea una cuenta";
        }
    }
}

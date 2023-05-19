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
            header("location: /dashboard");
        }
        $_SESSION["level"] = 0;
    }
    function login()
    {
        extract($_POST);
        
        if ($this->model->selectUser([
            'username' => $username,
            'password'=> md5($password)])) {
                echo "Bienvenido de nuevo";
                header("location: /dashboard");
                $_SESSION["level"] = 0;
            } else {
            header("location: /login");
        }
    }
}

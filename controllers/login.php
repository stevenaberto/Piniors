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
    }
    function login()
    {
        extract($_POST);
        
        if ($this->model->selectUser([
            'username' => $username,
            'password'=> md5($password)])) {
                echo "Bienvenido de nuevo";
                header("location: /dashboard");
            } else {
            header("location: /login");
        }
    }

    function logout(){
        session_destroy();
        header("location:/home");
    }
}

<?php

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
        ob_start();
        $this->view->render("login/index");
    }

    function signup()
    {
        extract($_POST);

        if (
            $this->model->insert
            ([
                    'name' => $name,
                    'username' => $username,
                    'email' => $email,
                    'password' => md5($password)
                ])
        ) {
            header("location: /dashboard");
        }
    }
    function login()
    {
        ob_clean();
        extract($_POST);
        $username = $_POST["username"];
        $password = $_POST["password"];
        $rol = $this->model->selectUser([
            'username' => $username,
            'password' => md5($password)
        ]);

        if ($rol == "admin") {
            header("location: /panel");
        } else if ($rol == 'user') {
            header("location: /dashboard");
        } else {
            header("location: /login");
            echo "Not";
        }
    }


    public function updatedata()
    {
        extract($_POST);

        $image = $_FILES["photo"];
        $imageName = $image["name"];
        $allows = array("jpg", "png", "webp", "jpeg", "gif");
        $ext = explode(".", $imageName);
        $ext = strtolower(end($ext));
        $rand_name = explode(".", $image["tmp_name"])[0];
        $target_image = URL . "public/img/" . basename($rand_name . "." . $ext);

        if ($this->model->update([$name, $email, $username, $target_image, $_SESSION["data"]["ID"]]))
            header("location:/dashboard");
    }
    function updateScore()
    {
        $score = $_POST["score"];
        $this->model->upScore($score);
        $_SESSION["data"]["score"] = $score;
    }

    function logout()
    {
        session_destroy();
        header("location:/login");
    }
}
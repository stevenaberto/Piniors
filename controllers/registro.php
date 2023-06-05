<?php

class Registro extends Controller
{
    function __construct()
    {
        parent::__construct();
        ob_start();
        $this->view->render("registro/index");
    }

    function registro()
    {
        ob_clean();
        extract($_POST);

        if ($password != $confirmpassword) {
            die("Ingresa la contraseña nuevamente. Tus contraseñas no son iguales");
        }
        $password = md5($password);

        $image = $_FILES["image"];
        $imageName = $image["name"];
        $allows = array("jpg", "png", "webp", "jpeg", "gif");
        $ext = explode(".", $imageName);
        $ext = strtolower(end($ext));
        $rand_name = explode(".", $image["tmp_name"])[0];
        $target_image = URL . "public/img/" . basename($rand_name . "." . $ext);

        if (in_array($ext, $allows)) {
            move_uploaded_file($image["tmp_name"], "/public/img/" . basename($rand_name . "." . $ext));
        } else {
            die("Tu archivo no es una imagen permitida!");
        }

        if($this->model->insert([$name,$username, $email, $password,$target_image])) header("location:/dashboard");
    }
}
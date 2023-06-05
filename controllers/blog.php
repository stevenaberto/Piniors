<?php

require_once('libs/Parsedown.php');
class Blog extends Controller
{
    function __construct()
    {
        parent::__construct();
        if (sizeof($this->url) < 3)
            $this->view->render("blog/index");
        $this->loadModel("activities");

    }

    function posts($title = "")
    {
        if (empty($title))
            // $this->view->render('blog/index');
            echo "Ejecutando funcion!";
        else {
            $Parsedown = new Parsedown();
            $filename = "public/posts/$title.md";
            $text = "Template";
            $file = fopen($filename, "r");

            if ($file == false) {
                $text = "***Este blog no existe lo siento!***";
            } else {
                $filesize = filesize($filename);
                $text = fread($file, $filesize);
                fclose($file);
            }
            include("view/blog/post.php");
        }
    }

    function uploadArticle()
    {
        // Subida de contenido
        $title = $_POST["title"];
        $descripcion = $_POST["descripcion"];
        $target_dir = "public/posts/";
        $upload = $target_dir . $title . ".md";
        $target_file = $target_dir . basename($_FILES["archivo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        $target_file = $_FILES['archivo']['tmp_name']; 

        // Comprobar el tamaño del archivo
        if ($_FILES["archivo"]["size"] > 500 * 1024) {
            echo "Lo sentimos, su archivo es demasiado grande.";
            $uploadOk = 0;
        }

        if (
            $imageFileType != "md"
        ) {
            echo "Lo sentimos, solo se permiten archivos .MD";
            $uploadOk = 0;
        }


        move_uploaded_file($_FILES['archivo']['tmp_name'], $upload);
        //Subida de portada
        $target_dir = "public/posts/";
        $upload = $target_dir . $title . ".md";
        $target_banner = $target_dir . basename($_FILES["portada"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_banner, PATHINFO_EXTENSION));


        $target_banner = $_FILES['archivo']['tmp_name']; 

        // Comprobar el tamaño del archivo
        if ($_FILES["archivo"]["size"] > 500 * 1024) {
            echo "Lo sentimos, su archivo es demasiado grande.";
            $uploadOk = 0;
        }

        if (
            $imageFileType != ".png"
        ) {
            echo "Lo sentimos, solo se permiten archivos JPG";
            $uploadOk = 0;
        }


        
        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
            $this->model->insertBlog([
                $title,
                $descripcion,

            ]);
            header("location:/blog");
        }


    }
}
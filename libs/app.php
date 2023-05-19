 <?php

    require_once "controllers/errores.php";
    class App
    {
        function __construct()
        {
            session_start();
            $url =  $_SERVER["REQUEST_URI"];
            $url = trim($url, "/");
            $url = explode("/", $url);

            if (empty($url[0])) {
                $archivoController = 'controllers/home.php';
                require_once $archivoController;
                $controller = new Home();
                $controller->loadModel('home');
                exit();
            }
            $archivoController = 'controllers/' . $url[0] . '.php';

            if (file_exists($archivoController)) {
                require_once $archivoController;
                $controller = new $url[0];
                $controller->loadModel($url[0]);

                if (isset($url[1])) {
                    $controller->{$url[1]}();
                }
            } else {
                $controller = new Errores();
            }
        }
    }

    ?>
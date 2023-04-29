 <?php

    require_once "controllers/errores.php";
    class App
    {
        function __construct()
        {

            $url =  $_SERVER["REQUEST_URI"];
            $url = trim($url, "/");
            $url = explode("/", $url);

            if (empty($url[0])) {
                $archivoController = 'controllers/main.php';
                require_once $archivoController;
                return false;
            }
            $archivoController = 'controllers/' . $url[0] . '.php';

            if (file_exists($archivoController)) {
                require_once $archivoController;
                $controller = new $url[0];

                if (isset($url[1])) {
                    $controller->{$url[1]}();
                }
            } else {
                $controller = new Errores();
            }
        }
    }

    ?>
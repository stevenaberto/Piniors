<?php

class View {
    function __construct()
    {
        
    }

    function render($name, $level=0, $redirect="login"){
        if(($level == 0 && $_SESSION["level"] == 0) || $_SESSION["level"] ==(1||2)){
            include "view/".$name."/index.php";
        }else {
            include "view/".$redirect."/index.php";
        }
    }
}


?>
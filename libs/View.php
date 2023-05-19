<?php

class View {
    function __construct()
    {
        
    }

    function render($name, $level=0, $redirect="login"){
        if(($level == 0 && $_SESSION["level"] == 0) || $_SESSION["level"] ==1){
            include "view/".$name."/index.php";
        }elseif ($level == 1 && $_SESSION["level"] != 1) {
            include "view/".$redirect."/index.php";
        }else {
           throw new ErrorException("Ni idea de que ocurrio...", 1);
        }
    }
}


?>
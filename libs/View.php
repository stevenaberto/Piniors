<?php

class View {
    function __construct()
    {
        
    }

    function render($name, $level=0, $redirect="login"){
        if(($level == 0 && $_SESSION["level"] == 0) || $_SESSION["level"] ==(1||2)){
            include_once("view/".$name.".php");
        }else {
            include_once("view/".$redirect.".php") ;
        }
    }

    
}


?>
<?php

class View {
    function __construct()
    {
        
    }

    function render($name, $level=0, $redirect="login/index"){
        //&& isset($_SESSION["rol"]) == "admin") || isset($_SESSION["rol"]) ==(1||2)
        if($level == -1 && isset($_SESSION["username"])) include_once("view/".$redirect.".php");
        else if($level == 0) include_once("view/".$name.".php");
        else if($level == 1 && $_SESSION["rol"] == ("user"||"admin")) include_once("view/".$name.".php");
        else if($level == 2 && $_SESSION["rol"] == "admin") include_once("view/".$name.".php");
        else include_once("view/".$redirect.".php") ;
    }

    
}


?>
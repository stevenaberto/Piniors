<?php

class View {
    function __construct()
    {
        
    }

    function render($name){
        include "view/".$name."/index.php";
    }
}


?>
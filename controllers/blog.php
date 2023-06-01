<?php

require_once('libs/Parsedown.php');
class Blog extends Controller
{
    function __construct()
    {
        parent::__construct();
        if (sizeof($this->url) < 3) $this->view->render("blog/index"); 
    }

    function posts($title=""){
        if(empty($title)) $this->view->render('blog/index');
        else{
            $Parsedown = new Parsedown();
            $filename = "public/posts/$title.md";
            $text = "Template";
            $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            $text = "***Este blog no existe lo siento!***";
        }else{
             $filesize = filesize( $filename );
            $text = fread( $file, $filesize );
            fclose($file);
         }
            include("view/blog/post.php");
        }
    }
}

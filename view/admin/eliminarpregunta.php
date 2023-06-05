<?php

    include("conexion.php");

    $url =  $_SERVER["REQUEST_URI"];
    $url = trim($url, "/");
    $url = explode("/", $url);
    
    $id = $url[2];

    $query = "DELETE FROM preguntas WHERE id = '$id'";
    mysqli_query($conn, $query);
?>
<script>
    window.location.href = '/admin/listadopreguntas';
</script>
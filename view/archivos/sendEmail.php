<?php

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

### Includes
include("includes/header.php");
###
$target_dir = "public/posts/";
$nombrefinal= trim ($_FILES['archivo']['name']); //Eliminamos los espacios en blanco
$upload= $target_dir . $nombrefinal;  
$target_file = $target_dir . basename($_FILES["archivo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$from_email         = 'leandrovillanuevaramos@gmail.com'; //del correo, dirección de correo electrónico del remitente
$recipient_email = 'codigotic83@gmail.com'; //Dirección de Correo Electrónico del Destinatario


$target_file = $_FILES['archivo']['tmp_name']; // obtener el nombre de archivo temporal del archivo en el servidor
$name     = $_FILES['archivo']['name']; // obtener el nombre del archivo
$size     = $_FILES['archivo']['size']; // obtener el tamaño del archivo para la validación del tamaño
$type     = $_FILES['archivo']['type']; // obtener el tipo de archivo
$error     = $_FILES['archivo']['error'];
$Archivoo = $_FILES['archivo']['name'];

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
}      // cerrar al finalizar


$contenido = "
name: $name
archivo: $Archivoo
size: $size
type: $type
";

$enlace =fopen("Datos.txt","w");
$correo = fwrite($enlace,"FORMULARIO ENVIO");
$correo =fwrite($enlace, "\n");
$correo =fwrite($enlace, "\n");
$correo =fwrite($enlace,"DATOS ENVIO");
$correo =fwrite($enlace, "\n");
$correo =fwrite($enlace, "\n");
$correo =fwrite($enlace,$contenido);
fclose($enlace);

echo "ARCHIVO GUARDADO CON EXITO....";

if(move_uploaded_file($_FILES['archivo']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
                          
}  


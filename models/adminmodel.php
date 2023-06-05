<?php

class adminModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

   function cambiarTema($datos){
    extract($datos);
        $query = $this->db->connect()->prepare("UPDATE temas SET nombre = ? WHERE id=?");
        $query->execute([$nombre, $id]);
        return true;
   }
   function agregarNuevoTema($tema){
    $query = $this->db->connect()->prepare("INSERT INTO temas (id, nombre) VALUES (NULL, ?)");
    $query->execute([$tema]);
    return true;

    //insertamos en la tabla temas
    // if (mysqli_query($conn, $query)) { //Se insertó correctamente
    //     $mensaje = "El fue agregado correctamente";
    //     header("Location: /quiz");
    // } else {
    //     $mensaje = "No se pudo insertar en la BD" ;
    // }
    // return $mensaje;
}


function obtenerTodosLosTemas()
{
    $query = $this->db->connect()->prepare("SELECT * from temas");
    $result = $query->execute();
    return $result;
}
function obtenerNombreTema($id){
    $query = $this->db->connect()->prepare("SELECT * from temas where id = ?");
    $result = $query->execute([$id]);
    $result->fetchAll();
    return $result["nombre"];
}

function obetenerTodasLasPreguntas()
{
    $query = $this->db->connect()->prepare("SELECT * from preguntas");
    $result = $query->execute();
    return $result;
}

function obtenerPreguntaPorId($id){
    $query = $this->db->connect()->prepare("SELECT * from temas WHERE id = ?");
    $result = $query->execute([$id]);
    $result->fetchAll();
    return $result;
}
function aumentarVisita(){
    include("conexion.php");
    //Selecciono el registro de la estadistica
    $query = $this->db->connect()->prepare("SELECT * from estadisticas WHERE id = 1");
    $query->execute();
    $estadistica = $query->fetch(PDO::FETCH_ASSOC)["result"];
    $visitas = $estadistica['visitas'];
    $visitas = $visitas + 1;

    $query = "UPDATE estadisticas SET visitas = '$visitas' WHERE id='1'";
    $result = mysqli_query($conn, $query);
}
// function aumentarRespondidas(){
//     include("conexion.php");
//     //Selecciono el registro de la estadistica
//     $query = "SELECT * FROM estadisticas  WHERE id='1'";
//     $result = mysqli_query($conn, $query);
//     $estadistica = mysqli_fetch_assoc($result);
//     $respondidas = $estadistica['respondidas'];
//     $respondidas = $respondidas + 1;

//     $query = "UPDATE estadisticas SET respondidas = '$respondidas' WHERE id='1'";
//     $result = mysqli_query($conn, $query);
// }
// function aumentarCompletados(){
//     $query = "SELECT * FROM estadisticas  WHERE id='1'";
//     $result = mysqli_query($conn, $query);
//     $estadistica = mysqli_fetch_assoc($result);
//     $completados = $estadistica['completados'];
//     $completados = $completados + 1;

//     $query = "UPDATE estadisticas SET completados = '$completados' WHERE id='1'";
//     $result = mysqli_query($conn, $query);
// }

}
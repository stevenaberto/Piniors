<?php

class loginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos)
    {
        // insertar datos en la BD
        try {
            $query = $this->db->connect()->prepare('INSERT INTO `cursos`(`Titulo`, `Banner`, `Descripcion`, `id_Maestro`, `id_categoria`) VALUES (:titulo, :banner, :Descripcion, :id_Maestro, :id_categoria)');
            $query->execute(['titulo' => $datos['title'], 
            'banner' => $datos['banner'], 
            'Descripcion' => $datos['descripcion'],
            'id_Maestro' => $datos['maestro'],
            'id_categoria' => $datos['categoria']]);
            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            echo "Ups, parece que algo ha salido mal!";
            return false;
        }
    }
    public function selectUser($datos)
    {
        extract($datos);
        // insertar datos en la BD
        try {
            $query = $this->db->connect()->prepare('SELECT email, password FROM users where email = :email and password = :password');
            $query->execute(["email"=>$email,"password" => $password]);
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $query->rowCount() > 0;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}

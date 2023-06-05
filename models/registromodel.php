<?php

class registroModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos)
    {
        // insertar datos en la BD
        try {
            $query = $this->db->connect()->prepare('INSERT INTO `users`( `name`,`username`, `email`, `password`,`img_profile`) VALUES (?,?,?,?,?)');
            $query->execute($datos);

            $_SESSION["level"] = 0;
            $_SESSION["username"] = $datos[1];
            $_SESSION["email"] = $datos[2];
            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            echo "Ups, parece que algo ha salido mal!" . $e->getMessage();
            return false;
        }
    }
    public function selectUser($datos)
    {
        extract($datos);
        // insertar datos en la BD
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM users where username = :username and password = :password');
            $query->execute(["username"=>$username,"password" => $password]);
            $result = $query->fetch(PDO::FETCH_ASSOC);

            $_SESSION["username"] = $datos["username"];
            $_SESSION["name"] = $datos["name"];
            $_SESSION["data"] = $result;
            
            return $query->rowCount() > 0;
        } catch (PDOException $e) {
            // print_r($e->getMessage());
            return false;
        }
    }
}

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
            $query = $this->db->connect()->prepare('INSERT INTO `users`( `name`,`username`, `email`, `password`) VALUES (:name ,:username, :email, :password)');
            $query->execute([
            'name' => $datos['name'], 
            'username' => $datos['username'], 
            'email' => $datos['email'], 
            'password' => $datos['password'],]);

            $_SESSION["level"] = 0;
            $_SESSION["username"] = $datos["username"];
            $_SESSION["email"] = $datos["email"];
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
            $query = $this->db->connect()->prepare('SELECT username, password FROM users where username = :username and password = :password');
            $query->execute(["username"=>$username,"password" => $password]);
            $result = $query->fetch(PDO::FETCH_ASSOC);

            $_SESSION["level"] = $result["level"];
            $_SESSION["username"] = $datos["username"];

            return $query->rowCount() > 0;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}

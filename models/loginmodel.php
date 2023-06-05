<?php

class loginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    function upScore($score)
    {
        try {
            $query = $this->db->connect()->prepare("UPDATE `users` SET `score`=? WHERE ID = ?");
            $query->execute([$score, $_SESSION["data"]["ID"]]);
            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            echo "Ups, parece que algo ha salido mal!";
            return false;
        }
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
                'password' => $datos['password'],
            ]);

            $_SESSION["level"] = 0;
            $_SESSION["username"] = $datos["username"];
            $_SESSION["email"] = $datos["email"];
            $_SESSION["data"] = $datos;

            $this->selectUser([$datos["username"], $datos["password"]]);
            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            echo "Ups, parece que algo ha salido mal!";
            return false;
        }
    }

    function update($datos){
        // insertar datos en la BD
        try {
            $query = $this->db->connect()->prepare('UPDATE `users` SET `name`=?,`email`=?,`username`=?,`img_profile`=? WHERE ID = ?');
            $query->execute($datos);
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $this->selectUserByID($_SESSION["ID"]);
            return $query->rowCount() > 0;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function selectUser($datos)
    {
        extract($datos);
        // insertar datos en la BD
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM users where username = ? and password = ?');
            $query->execute([$username,$password]);
            $result = $query->fetch(PDO::FETCH_ASSOC);

            $_SESSION["username"] = $result["username"];
            $_SESSION["name"] = $result["name"];
            $_SESSION["email"] = $result["email"];
            $_SESSION["ID"] = $result["ID"];
            $_SESSION["rol"] = $result["rol"];
            $_SESSION["data"] = $result;

            return $result["rol"];
        } catch (PDOException $e) {
        //     throw new ErrorException($e->getMessage());
            return false;
        }
    }
    public function selectUserByID($id){
        // insertar datos en la BD
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM users where username = ?');
            $query->execute([$id]);
            $result = $query->fetch(PDO::FETCH_ASSOC);

            $_SESSION["username"] = $result["username"];
            $_SESSION["name"] = $result["name"];
            $_SESSION["ID"] = $result["ID"];
            $_SESSION["rol"] = $result["rol"];
            $_SESSION["data"] = $result;

            return $query->rowCount() > 0;
        } catch (PDOException $e) {
            // print_r($e->getMessage());
            return false;
        }
    }
}
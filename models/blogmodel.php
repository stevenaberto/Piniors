<?php

class adminModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    function insertBlog($datos)
    {
        try {
            $query = $this->db->connect()->prepare("INSERT INTO blog(titulo, descripcion, archivo, autor, fecha, portada) VALUES (?,?,?,?,?,?)");
            $query->execute($datos);
            return true;
        } catch (PDOException $e) {
            throw $e;
        }
    }

}
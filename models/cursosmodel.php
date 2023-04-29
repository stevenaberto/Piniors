<?php

class cursosModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos)
    {
        // insertar datos en la BD
        try {
            $query = $this->db->connect()->prepare('INSERT INTO `cursos`(`Titulo`, `Banner`, `Descripcion`, `id_Maestro`, `id_categoria`) VALUES (:matricula, :nombre, :apellido)');
            $query->execute(['Titulo' => $datos['title'], 
            'banner' => $datos['banner'], 
            'Descripcion' => $datos['descripcion'],
            'id_Maestro' => $datos['maestro'],
            'id_categoria' => $datos['categoria']]);
            return true;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo "Ya existe esa matrícula";
            return false;
        }
    }
}

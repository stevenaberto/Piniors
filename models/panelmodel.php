<?php

class panelModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getStadistic($id=1){
        try {
            //Estadistica
            $query = $this->db->connect()->prepare("SELECT estadisticas.*, COUNT(*) as 'Total' FROM `estadisticas` INNER JOIN users on 1 where estadisticas.id = ?");
            $query->execute([$id]);
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            print_r($e->getMessage());
            return false;
        }
    }
    public function getVisits(){
        try {
            //Estadistica
            $query = $this->db->connect()->prepare("SELECT visitas FROM `estadisticas`");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_COLUMN, 0);
            return $result;
        } catch (PDOException $e) {
            print_r($e->getMessage());
            return false;
        }
    }
}

?>
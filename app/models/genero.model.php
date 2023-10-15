<?php


class GeneroModel{

    private $db;
        
        
    function __construct(){
        //LE PASO AL CONSTRUCTOR LA FUNCION DE CONECTAR A LA DB, asi cada vez que 
        //LA USO LA CONEXION ESTA ABIERTA POR EL CONSTRUCTOR.
        //NO NECESITO HACER EL PASO 1 EN CADA FUNCION.
        $this->db= $this->getConection();
    }
    //ABRE LA CONEXION A LA BASE DE DATOS
    //solo se puede llamar el mismo , nadie de afuera se va a conectar por eso el private.
   private function getConection() {
        return new PDO('mysql:host=localhost;dbname=db_peliculas;charset=utf8', 'root', '');
    }

     // obtiene la lista de generos de la DB.
  function getGeneros() {
    $query = $this->db->prepare('SELECT * FROM generos');
    $query->execute();
    $generos = $query->fetchAll(PDO::FETCH_OBJ);
    return $generos;
}

public function agregarGenero($genero) {
    $query = $this->db->prepare("INSERT INTO generos (genero) VALUES (?)");
    $query->execute([$genero]);
    return $this->db->lastInsertId();
}

function eliminarGenero($genero_id) {
    $query = $this->db->prepare('DELETE FROM generos WHERE genero_id = ?');
    $query->execute([$genero_id]);
}

function editarGenero($genero, $id_genero ){
    $query = $this->db->prepare("UPDATE generos SET `genero`=? WHERE 'id_genero'=?");
    $query->execute([$genero, $id_genero]);
}

}
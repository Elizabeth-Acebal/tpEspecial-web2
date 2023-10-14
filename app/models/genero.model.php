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

}
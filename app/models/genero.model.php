<?php
require_once 'config.php';
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
        return new PDO("mysql:host=".MYSQL_HOST .
        ";dbname=".MYSQL_DB.";charset=utf8", 
        MYSQL_USER, MYSQL_PASS);
        
    }




    public function getGeneros(){
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM  `generos`");
        $query->execute();
        // 3. obtengo los resultados
        $generos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $generos;
    }




}
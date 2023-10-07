<?php

class UsuarioModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_peliculas;charset=utf8', 'root', '');
    }

    public function getUsuarioByEmail($email) {
        $query = $this->db->prepare("SELECT * FROM `usuario` WHERE `email` = ?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

}
?>
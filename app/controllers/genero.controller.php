<?php
include_once 'app/models/genero.model.php';
include_once 'app/views/pelicula.view.php';

class GeneroController{

    private $model;
    private $view;

    //CREO EL CONSTRUCTOR
    function __construct(){
        $this->model = new GeneroModel();
        $this->view = new PeliculaView();
    }
  // obtiene la lista de generos de la DB.
  function getGeneros() {
    $query = $this->db->prepare('SELECT * FROM generos');
    $query->execute();
    $generos = $query->fetchAll(PDO::FETCH_OBJ);
    return $generos;
}

}
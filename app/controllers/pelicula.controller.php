<?php
include_once 'app/models/pelicula.model.php';
include_once 'app/views/pelicula.view.php';

class PeliculaController{

    private $model;
    private $view;

    //CREO EL CONSTRUCTOR
    function __construct(){
        $this->model = new PeliculaModel();
        $this->view = new PeliculaView();
    }


    function mostrarHome(){
        
    }

}
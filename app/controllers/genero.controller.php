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


    function mostrarHome(){
        $this->view->mostrarHome();
    }

}
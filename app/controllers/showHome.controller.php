<?php
include_once 'app/models/showHome.model.php';
include_once 'app/views/showHome.view.php';

class showHomeController{

    private $model;
    private $view;

    //CREO EL CONSTRUCTOR
    function __construct(){
        $this->model = new showHomeModel();
        $this->view = new showHomeView();
    }


    function mostrarHome(){
        $this->view->mostrarHome();
    }

}
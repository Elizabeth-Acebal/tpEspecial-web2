<?php
include_once 'app/models/genero.model.php';
include_once 'app/views/genero.view.php';
include_once 'app/models/pelicula.model.php';
include_once 'app/helpers/auth.helper.php';

class GeneroController{

    private $PeliculaModel;
    private $GeneroView;
    private $GeneroModel;
    private $AuthHelper;

    //CREO EL CONSTRUCTOR
    function __construct(){
        $this->PeliculaModel= new PeliculaModel();
        $this->GeneroView = new GeneroView();
        $this->GeneroModel= new GeneroModel();
        $this->AuthHelper=new AuthHelper();
    }
    function showGeneros(){
        $peliculas= $this->PeliculaModel->getPeliculas();
        $generos=$this->GeneroModel->getGeneros();
        $this->GeneroView->showGeneros($generos,$peliculas);
    }

    function showFormGenero(){  
        $generos = $this->GeneroModel->getGeneros();
        $this->GeneroView->showFormGenero($generos);
    }

    function agregarGenero() {
        // TODO: validar entrada de datos
        if ((isset($_POST['genero' ] ))  ) {
            $genero = $_POST['genero'];
            $id = $this->GeneroModel->agregarGenero($genero);
            header("Location: " . BASE_URL . "generos");
        }
    }

    function eliminarGenero($id_genero) {
    $this->AuthHelper->checkLogged();   //BARRERA DE SEGURIDAD
    $this->GeneroModel->eliminarGenero($id_genero);
    header("Location: " . BASE_URL . "generos");
    }

    function editarGenero($id_genero){
        if ((isset($_POST['genero'])) ) {
            $genero = $_POST['genero'];
            $this->GeneroModel->editarGenero($genero, $id_genero);
            header("Location: " . BASE_URL . "generos");
        }
    }

}
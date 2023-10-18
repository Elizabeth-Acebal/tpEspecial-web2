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
        $genero = $_POST['genero'];
        // TODO: validar entrada de datos
        if ((empty($_POST['genero' ] ))  ) {
            $this->GeneroView->showError("Debe completar todos los campos");
            return;
        }
       $id = $this->GeneroModel->agregarGenero($genero);
        if($id)   {
              header("Location: " . BASE_URL . "generos");
        }else{
            $this->GeneroView->showError("Error al insertar la tarea");
        }    
    }

    function eliminarGenero($id_genero) {
        $this->AuthHelper->checkLogged();   //BARRERA DE SEGURIDAD
    try{    
    $this->GeneroModel->eliminarGenero($id_genero);
    header("Location: " . BASE_URL . "generos");
    }
    catch(Exception $e){
    $genero=$this->GeneroModel->getGeneros();
    $this->GeneroView->showGeneros($genero, "no se puede eliminar un género que contiene peliculas");
    }
    }

    function editarGenero($id_genero){

   if ((isset($_POST['genero'])) ) {
      $genero = $_POST['genero'];
      if ((empty($_POST['genero' ] ))  ) {
        $this->GeneroView->showError("Debe completar todos los campos");
        return;
       } 
     $this->GeneroModel->editarGenero($genero, $id_genero);
    
     header("Location: " . BASE_URL . "generos");
    }
       
        
    }

}


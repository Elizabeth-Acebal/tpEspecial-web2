<?php 
    include_once 'app/models/pelicula.model.php';
    include_once 'app/views/pelicula.view.php';
    include_once 'app/models/genero.model.php';
    include_once 'app/helpers/auth.helper.php';
        

    class PeliculaController{

        private $PeliculaModel;
        private $PeliculaView;
        private $GeneroModel;
        private $AuthHelper;
    
    function __construct(){
        $this->PeliculaModel= new PeliculaModel();
        $this->PeliculaView = new PeliculaView();
        $this->GeneroModel= new GeneroModel();
        $this->AuthHelper=new AuthHelper();

        

    }

    function showPeliculas(){
        $peliculas= $this->PeliculaModel->getPeliculas();
        $generos=$this->GeneroModel->getGeneros();
        $this->PeliculaView->showPeliculas( $generos,$peliculas);

    }

    function showFormPelicula(){
        // verifico que el usuario esté logueado siempre.
       // $this->AuthHelper->checkLogged();//VER ESTOOOOOOOO
        
        $peliculas = $this->PeliculaModel->getPeliculaConGenero();
        $generos = $this->GeneroModel->getGeneros();
        $this->PeliculaView->showFormPelicula($peliculas, $generos);
    }

    function agregarPelicula() {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $director = $_POST['director'];
        $calificacion = $_POST['calificacion'];
        $id_genero = $_POST['id_genero'];
        // TODO: validar entrada de datos
        if ((empty($_POST['titulo'])) || (empty($_POST['descripcion'])) || (empty($_POST['director'])) || (empty($_POST['calificacion']))    ) {
            $this->PeliculaView->showError("debe completar todos los campos");
            return;
           
        }
        $id = $this->PeliculaModel->agregarPelicula($titulo, $descripcion, $director,$calificacion,$id_genero);
               
        if($id){
            header("Location: " . BASE_URL . "peliculas");  
        }else{
            $this->PeliculaView->showError("Error al insertar la tarea");
        }



        
    }
    
    function eliminarPelicula($pelicula_id) {
        $this->AuthHelper->checkLogged();   //BARRERA DE SEGURIDAD
        $this->PeliculaModel->eliminarPelicula($pelicula_id);
        header("Location: " . BASE_URL . "peliculas");
    }

    function editarPelicula($pelicula_id){

        if ((isset($_POST['titulo'])) && (isset($_POST['descripcion'])) && (isset($_POST['director'])) && (isset($_POST['calificacion']))) {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $director = $_POST['director'];
            $calificacion = $_POST['calificacion'];
            $id_genero = $_POST['id_genero'];
            $this->PeliculaModel->editarPelicula($titulo, $descripcion, $director, $calificacion, $id_genero, $pelicula_id);
            header("Location: " . BASE_URL . "peliculas");
        }
    }

    public function showPeliculasPorGenero($id_genero){
        $generoPeliculas = $this->PeliculaModel->ShowGeneroPeliculas($id_genero);
        $this->PeliculaView->showPeliculasPorGenero($generoPeliculas);
    }

    function ShowPeliculaDetalle($pelicula_id){
        $peliculaDetalle = $this->PeliculaModel->ShowPeliculaDetalle($pelicula_id);
        $this->PeliculaView->showPeliculaDetalle($peliculaDetalle);
    }
    
}
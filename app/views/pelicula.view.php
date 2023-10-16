<?php
    require_once 'libs/smarty-4.3.4/libs/Smarty.class.php';

    class PeliculaView{
        private $smarty;
        
        public function __construct() {
            $this->smarty = new Smarty(); //inicializo smarty
           // $this->smarty->assign('usuario', $usuario);
        
            }
    
        function showPeliculas($generos,$peliculas){
             // asigno variables al tpl smarty
             $this->smarty->assign('generos', $generos);
            $this->smarty->assign('peliculas', $peliculas);
            
            // mostrar el tpl
            $this->smarty->display('templates/showPeliculas.tpl');
        }

        function showFormPelicula($peliculas,$generos) {
            // asigno variables al tpl smarty
            $this->smarty->assign('peliculas', $peliculas);
            $this->smarty->assign('generos', $generos);
            // mostrar el tpl
            $this->smarty->display('templates/editarPelicula.tpl');
        }

    
        
       function showPeliculasPorGenero($generoPeliculas){
            $this->smarty->assign('generoPeliculas', $generoPeliculas);
             // mostrar el tpl
            $this->smarty->display('templates/peliculasPorGenero.tpl');
        }

       
        function showPeliculaDetalle($peliculaDetalle){
            $this->smarty->assign('peliculaDetalle', $peliculaDetalle);
             // mostrar el tpl
            $this->smarty->display('templates/peliculaDetalle.tpl');
        }
        
        function showError($error){
            $this->smarty->display('templates/error.tpl');
        } 
   
        
    }
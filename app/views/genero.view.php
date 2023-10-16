<?php
    require_once 'libs/smarty-4.3.4/libs/Smarty.class.php';

    class GeneroView{

        private $smarty;
        
        public function __construct() {
            $this->smarty = new Smarty(); //inicializo smarty
           // $this->smarty->assign('usuario', $usuario);
        
            }
    
        function showGeneros($generos,$peliculas){
             // asigno variables al tpl smarty
            $this->smarty->assign('generos', $generos);
            $this->smarty->assign('peliculas', $peliculas);
            
            // mostrar el tpl
            $this->smarty->display('templates/showGeneros.tpl');
        }

        function showFormGenero($generos) {
            // asigno variables al tpl smarty
            $this->smarty->assign('generos', $generos);
            // mostrar el tpl
            $this->smarty->display('templates/editarGenero.tpl');
        }

        
    }
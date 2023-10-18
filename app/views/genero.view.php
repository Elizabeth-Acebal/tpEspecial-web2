<?php
    require_once 'libs/smarty-4.3.4/libs/Smarty.class.php';

    class GeneroView{

        private $smarty;
        
        public function __construct() {
            $this->smarty = new Smarty(); //inicializo smarty
    
            }
    
        function showGeneros($generos, $error){
             // asigno variables al tpl smarty
            $this->smarty->assign('generos', $generos);
            $this->smarty->assign('error', $error);
            
            // mostrar el tpl
            $this->smarty->display('templates/showGeneros.tpl');
            
        }

        function showFormGenero($generos) {
            // asigno variables al tpl smarty
            $this->smarty->assign('generos', $generos);
           
            // mostrar el tpl
            $this->smarty->display('templates/editarGenero.tpl');
        }

        function showError($error=null){
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/error.tpl');
        } 

        
    }
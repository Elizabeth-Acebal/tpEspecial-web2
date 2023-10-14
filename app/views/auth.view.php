<?php
        require_once 'libs/smarty-4.3.4/libs/Smarty.class.php';

        class AuthView {
            private $smarty;

            public function __construct() {
               $this->smarty = new Smarty(); //inicializo smarty
            
            }
            
            //error=null es una forma de mandarlo opcional
            function showFormLogin($error = null){
               // $this->smarty->assign('titulo', 'Iniciar Sesión');
                $this->smarty->assign('error', $error);
                $this->smarty->display('templates/formLogin.tpl');
            }

        
            

        }
        
        
       
        
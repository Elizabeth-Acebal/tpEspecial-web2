<?php
        require_once 'libs/smarty-4.3.4/libs/Smarty.class.php';

        class showHomeView {
             private $smarty;

             public function __construct() {
                $this->smarty = new Smarty(); //inicializo smarty
                // $this->smarty->assign('user', $user);
              }
                
              function mostrarHome(){
                  $this->smarty->display('templates/home.tpl');   
                
              }

        }
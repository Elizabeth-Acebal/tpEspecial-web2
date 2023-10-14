<?php

class AuthHelper {
    public function __construct(){
        session_start();
    }
    
        
    

   /* public static function init() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }


    }

   
   

    public static function verify() {
        AuthHelper::init();
        if (!isset($_SESSION['USER_ID'])) {
            header('Location: ' . BASE_URL . '/login');
            die();
        }
    }*/

    //BARRERA DE SEGURIDAD PARA USUARIO LOGUEADO
    /**
     * Verifica que el user este logueado y si no lo está
     * lo redirige al login.
     */
    function checkLogged(){
        session_start();
        if(!isset($_SESSION['IS_LOGGED'])){
            header("Location: " . BASE_URL . "login");
        }
    }

   /* public static function logout() {
       // AuthHelper::init();
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "login");
    }*/
    
   /* public static function login($usuario) {
        session_start();
       // AuthHelper::init();
        $_SESSION['ID_USUARIO'] = $usuario->id;
        $_SESSION['EMAIL_USUARIO'] = $usuario->email;
    }*/
  /*  public function getUser(){
        return $_SESSION;
        }
*/
}

?>
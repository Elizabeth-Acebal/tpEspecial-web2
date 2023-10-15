<?php
include_once('app/views/auth.view.php');
include_once('app/models/usuario.model.php');
include_once('app/helpers/auth.helper.php');

class AuthController {

    private $view;
    private $model;
    private $AuthHelper;

    public function __construct() {
        $this->view = new AuthView();
        $this->model = new UsuarioModel();
        $this->AuthHelper = new AuthHelper();
    }

    public function showLogin() {
        $this->view->showFormLogin();
            
        
    }

    /**RECIBO LA INF DEL USUARIO */
    public function loginUser() {  //validateuser
        $email = $_POST['email'];
        $password = $_POST['password'];

/**COMPRUEBO QUE NO ESTEN VACIOS */
        if (empty($email) || empty($password)) {
            $this->view->showFormLogin('Faltan datos obligatorios');
          //  return;
        }

      // obtengo el usuario
        $usuario = $this->model->getByEmail($email);

        //SI EL USUARIO EXISTE Y LA CONTRASEÑA COINCIDE
        //primero le paso la contraseña del usuario y la otra encriptada
       if ($usuario && password_verify($password, $usuario->password)) {
            // ACA LO AUTENTIQUE

            //ARMO LA SESION DEL USUARIO
            
           // session_start();
            $_SESSION['USUARIO_ID'] = $usuario->id_usuario;
            $_SESSION['EMAIL'] = $usuario->email;
            $_SESSION['IS_LOGGED'] = true;

            
           // AuthHelper::login($usuario);
            //REDIRIGIMOS AL HOME
            header('Location: ' . BASE_URL . 'peliculas');
        } else {
           $this->view->showFormLogin('Usuario inválido');
          
        }
    }


    function logout() {
       // AuthHelper::logout();
       session_destroy();
       header('Location: ' . BASE_URL . "login");    
    }

}
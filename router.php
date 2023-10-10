<?php
    require_once 'app/controllers/pelicula.controller.php';
    require_once 'app/controllers/genero.controller.php';
    require_once 'app/controllers/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

// home   ->        mostrarHome();
// agregar   ->     showAgregarPago();
// eliminar/:ID  -> eliminarPago($id); 
// login ->         showFormLogin();
// logout ->        logout();
//validar ->        validateUser();



// parsea la accion para separar accion real de parametros
$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controller = new PeliculaController;
        $controller->mostrarHome();
        break;
    case 'agregar':
       // showAgregarPagos();
        break;
    case 'eliminar':
      //  eliminarPago($params[1]);
        break;
    case 'login':
        $controller = new AuthController();
        $controller->showFormLogin();
        break;
    case 'validar':
        $controller = new AuthController();
        $controller->validateUser();
        break;
    
    case 'logout':
        $controller = new AuthController();
        $controller->logOut();
        break;
    default: 
        echo "404 Page Not Found";
        break;
}
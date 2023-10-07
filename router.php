<?php
    require_once 'app/controllers/showHome.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

// home   ->    mostrarHome();
// agregar   ->    showAgregarPago();
// eliminar/:ID  -> eliminarPago($id); 


// parsea la accion para separar accion real de parametros
$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controller = new ShowHomeController;
        $controller->mostrarHome();
        break;
        case 'peliculas':
            $controller = new PeliculaController;
          //  $controller->mostrarHome();
            break;

    case 'agregar':
       // showAgregarPagos();
        break;
    case 'eliminar':
      //  eliminarPago($params[1]);
        break;
    
    default: 
        echo "404 Page Not Found";
        break;
}
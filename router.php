<?php
    require_once 'app/controllers/showHome.controller.php';
    require_once 'app/controllers/pelicula.controller.php';
<<<<<<< HEAD
    require_once 'app/controllers/genero.controller.php';
    require_once 'app/controllers/auth.controller.php';
=======
    require_once 'app/controllers/auth.controller.php';

>>>>>>> 538187f613419702dcee88a9d5e399ead11e2643

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define("LOGIN", BASE_URL . 'login');

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
    case 'login':
        $controller = new AuthController;
        $controller->showLogin();
        break;
    case 'verify':
        $controller = new AuthController();
        $controller->loginUser();
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;
    case 'home':
        $controller = new ShowHomeController;
        $controller->mostrarHome();
        break;
        case 'peliculas':
            $controller = new PeliculaController;
            $controller->showPeliculas();
            break;
        case 'peliculaDetalles':
            $controller = new PeliculaController();
            $id=$params[1];
            $controller->ShowPeliculaDetalle($id);
            break;
        case 'peliculasPorGenero':
                $controller = new PeliculaController();
                $id = $params[1];
                $controller->showPeliculasPorGenero($id);
                break;
    case 'agregarPelicula':
        $controller = new PeliculaController;
        $controller->agregarPelicula();
        break;
    case 'eliminarPelicula':
        $controller = new PeliculaController();
        $id = $params[1];
        $controller->eliminarPelicula($id);
        break;
<<<<<<< HEAD
    case 'login':
        $controller = new AuthController();
        $controller->showFormLogin();
        break;
    case 'validar':
        $controller = new AuthController();
        $controller->validateUser();
        break;
=======

    case 'editarPelicula':
        $controller = new PeliculaController();
        $id=$params[1];
        $controller->editarPelicula($id);
        break;
        case 'formEditarPelicula':
            $controller = new PeliculaController();
            // obtengo el parametro de la acción   
            $controller->showFormPelicula();
            $id = $params[1];
            $controller->editarPelicula($id);
            break;


    
>>>>>>> 538187f613419702dcee88a9d5e399ead11e2643
    
    case 'logout':
        $controller = new AuthController();
        $controller->logOut();
        break;
    default: 
        echo "404 Page Not Found";
        break;
}
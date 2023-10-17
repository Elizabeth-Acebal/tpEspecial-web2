<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="{BASE_URL}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Peliculas online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">  
</head>
<body class="p-3 mb-2 bg-dark text-white">

    <header>
        <nav class="navbar-expand-lg  navbar bg-dark  mb-0  "> 
            <div>
                <img src="image/cine.png" alt="logo" class="logo"">
            </div>
            <div class="container-fluid">
                <a class="navbar-brand fw-bold text-white bg-dark" href="home">Peliculas online</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link active text-white bg-dark" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link  text-white bg-dark" href="generos">Géneros</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link  text-white bg-dark" href="peliculas">Peliculas</a>
                        </li>
                        {if !isset($smarty.session.USUARIO_ID)}
                            <li class="nav-item">
                                <a class="nav-link  text-white " aria-current="page" href="login">Iniciar Sesión</a>
                            </li>
                        {else}
                            <li class="nav-item ml-auto">
                                <a class="nav-link text-white" aria-current="page" href="logout">Cerrar Sesión</a>
                            </li>
                        {/if}

                    </ul>
                  
                </div>
            </div>
        </nav>
  
    </header>
      <!-- inicio main container -->
<main class="container">

       
       


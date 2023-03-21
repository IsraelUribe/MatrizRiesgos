<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.mcom/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
    <?php  
        session_start();  
        if(!$_SESSION['userName'])  
        {  
            header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
        }  
    ?> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="images/iteshu.png" alt="Logo" width="full" height="full" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon dropdown"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="MatrizRiesgos.php">Matríz Riesgos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="MapaRiesgos.php">Mapa Riesgos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Ptar.php">PTAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="Avance.php">Avance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="Factores.php">Factores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="Controles.php">Controles</a>
                    </li>
                    <?php
                        $usuario = $_SESSION['userName'];
                        if($usuario == 'admin@admin'){
                        echo '<div class="nav-item dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opciones
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="Usuarios.php">Usuarios</a>
                                    <a class="dropdown-item" href="AreasEncargados.php">Áreas y Servidores</a>
                                </div>
                            </div>';
                        }
                    ?>
                </ul>
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['userName'];?><!-- Código PHP para imprimir la session activa -->
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Logout.php"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30px" height="30px"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M352 96h64c17.7 0 32 14.3 32 32V384c0 17.7-14.3 32-32 32H352c-17.7 0-32 14.3-32 32s14.3 32 32 32h64c53 0 96-43 96-96V128c0-53-43-96-96-96H352c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-7.5 177.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H160v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg><!-- <i class="fa-solid fa-right-to-bracket"> </i>Salir --></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ml-1">
                <a href="Logout.php">
                <i class="fa fa-window-close" style="font-size:24px;color:white" ></i>
                </a>
                </ul>
            </div>
            
        </div>
    </nav>
</body>
</html>

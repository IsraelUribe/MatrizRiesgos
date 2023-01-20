
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico"/>
    <title>Matríz de Administración de Riesgos Institucional | Inicio Sesión</title>
    <link rel="stylesheet" href="styles/login.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <?php /* //etiqueta de apertura de un fragmento de código php, la de cierr es así: ?> */
        require_once("DataBaseConnect.php");//Comando para incluir un archivo php, es identica a requiere, solo que con esta si ya se ha incluido antes el archivo no se volverá a incluir.
        //el requiere contiene las credenciales de conexión a la base de datos.
        session_start();//Iniciar una nueva sesión o reanudar la anterior
        if (isset($_POST['inicio'])) {//Verifica si una variable ha sido declarada o no, en este caso toma el nombre del boton de login
            $username = mysqli_real_escape_string($conn, $_POST['correo']);//variable que toma lo que hay en la caja de texto de correo y lo convierte todo a string
            $password = mysqli_real_escape_string($conn, $_POST['pass']);//variable que toma lo que hay en la caja de texto de password y lo convierte todo a string
            $query = "SELECT * FROM usuarios WHERE email_user = '$username' and password_user = '$password'";//Consulta a la tabla usuarios para encontrar coindidencias con los valores que ahora tienen las variables.
            $result = mysqli_query($conn, $query);//Este comando sirve para ejecutar realmente la consulta en la base de datos, $conn es el nombre de la conexión a la base de datos y $query es la consulta o sentecia sql que se desea ejecutar.
            /* $nombre = "SELECT nombre from usuarios where email_user = '$username'";
            $resultado = mysqli_query($conn, $nombre); */
                        
        
            if (mysqli_num_rows($result)) {//Este retorna el numero de filas consultadas y cuando la fila coincide con result que contiene el resultado de la consulta se obtiene lo siguiente.
                $_SESSION['userName'] = $username;//El nombre de la sesión activa será igual a lo que haya en la variable usarname.
                header("Location: Informacion.php"); // Redirigir al usuario al archivo Informacion.php 
            } else {//En caso de ser falso(que el usuario y/o contraseña sean incorrectas) se mostrará esto.
                 echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "¡ERROR!",
                    text: "Alguno de los datos ingresados, es incorrecto. Intenta de nuevo.",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            </script>';
            }
        }else{//si la variable inicio no esta declarada mostrará esto
    ?>
    <div id="login">
        <div class="sidenav">
            <div class="login-main-text">
                <h1 class="text-center text-4xl">Bienvenido a<br/> la Matríz de Administración de Riesgos Institucional</h1>
                <br/>
                <p class="text-center">Instituto Tecnológico Superior de Huichapan</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/coyote.jpg" class="d-block w-full" alt="coyote">
                        </div>
                        <div class="carousel-item">
                            <img src="images/iteshu.png" class="d-block w-100" alt="iteshu">
                        </div>
                        <div class="carousel-item">
                            <img src="images/coyote.jpg" class="d-block w-full" alt="coyote">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>
                </div>
                <div class="login-form -ml-15 -mb-40 mt-40">
                    <form method="post">
                        <div class="form-group">
                            <label >Correo</label>
                            <input type="email"  name="correo" id="correo" placeholder="abcdefghij@iteshu.edu.mx" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label >Cotraseña</label>
                            <input type="password"  name="pass" id="contrasenia" placeholder="Password" class="form-control" required/>
                        </div>
                        <input  type="submit" class="btn btn-primary bg-blue-600 rounded-2xl" value="login" name="inicio"></input>
                        <a href="Registro.php"><button  type="button" class="btn btn-primary bg-blue-600 rounded-2xl">Register</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } ?> 
</body>
</html>
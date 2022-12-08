
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
    <div id="login">
        <div class="sidenav">
            <div class="login-main-text">
                <h1 class="text-center text-4xl">Bienvenido a<br/> la Matríz de Administración de Riesgos Institucional</h1>
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
                            <img src="images/coyote.jpg" class="d-block w-100" alt="coyote">
                        </div>
                        <div class="carousel-item">
                            <img src="images/iteshu.png" class="d-block w-100" alt="iteshu">
                        </div>
                        <div class="carousel-item">
                            <img src="images/coyote.jpg" class="d-block w-100" alt="coyote">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="login-form -ml-15 -mb-40 mt-40">
                    <form >
                        <div class="form-group">
                            <label >Correo</label>
                            <input type="email"   placeholder="abcdefghij@iteshu.edu.mx" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label >Cotraseña</label>
                            <input type="password"  placeholder="Password" class="form-control" required/>
                        </div>
                        <a href="MatrizRiesgos.php"><button  type="button" class="btn btn-primary bg-blue-600">Login</button></a>
                        <a href="Registro.php"><button  type="button" class="btn btn-primary bg-blue-600">Register</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
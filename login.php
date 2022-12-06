
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
</head>

<body>
    <div id="login">
        <div class="sidenav">
            <div class="login-main-text">
                <h2 clas="text-center">Bienvenido a<br/> la Matríz de Administración de Riesgos Institucional</h2>
                <p>Instituto Tecnológico Superior de Huichapan</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                    <form >
                        <div class="form-group">
                            <label >Correo</label>
                            <input type="email"   placeholder="abcdefghij@iteshu.edu.mx" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label >Cotraseña</label>
                            <input type="password"  placeholder="Password" class="form-control" required/>
                        </div>
                        <button  type="submit" class="btn-black"><a href="MatrizRiesgos.php">Login</a></button>
                        <button type="submit" class="btn-black">Registro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
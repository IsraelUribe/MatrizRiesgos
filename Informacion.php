<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico"/>
    <title>Información General</title>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="Recursos/bootstrap.min.css"/>
    <link rel="stylesheet" href="Recursos/tailwind.min.css"/>
    <script type="text/javascript" src="Recursos/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="Recursos/bootstrap.min.js"></script>
    <script type="text/javascript" src="Recursos/jquery-ui.min.js"></script>
    <script type="text/javascript" src="Recursos/jquery.min.js"></script>
    <script type="text/javascript" src="Recursos/sweetalert.min.js"></script>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col mt-10 ml-24">
                <img alt="SEP" src="images/logoSEP.png" class="text-center" width="400" height="330" />
            </div>
            <div class="col mt-10 pt-12">
                <h1 class="text-4xl" style="color:blue">Formato de <span style="color: red;">A</span>dministración de <span style="color:red">R</span>iesgos <span style="color:red">I</span>nstitucional</h1>
            </div>
        </div>
        <div class="row mt-10">
            <div class="col mt-2">
                <label >RAMO / SECTOR:</label><br/><br/>
                <label class="pt-2">INSTITUCIÓN:</label><br/><br/>
                <label class="pt-2">AÑO:</label><br/><br/>
                <label class="pt-2">Titular de la Institución</label><br/><br/>
                <label class="pt-2">Coordinador de Control Interno</label><br/><br/>
                <label class="pt-2">Enlace de Administración de Riesgos</label>
            </div>
            <div class="col">
                <select placeholder='Selecione' class='form-control'>
                    <option value="">04 Gobernación</option>
                    <option value="1">05 Relaciones Exteriores</option>
                    <option value="2">06 Hacienda y crédito público</option>
                    <option value="3">07 Defensa Nacional</option>
                    <option value="4">08 Agricultura, Ganaderia, Desarrollo Rural, Pesca y Alimentación</option>
                    <option value="5">09 Comunicaciones y Transporte</option>
                    <option value="6">10 Economía</option>
                    <option value="7" selected>11 Educación Publica</option>
                    <option value="8">12 Salud</option>
                    <option value="9">13 Marina</option>
                    <option value="10">14 Trabajo y Prevensión Social</option>
                    <option value="11">15 Reforma Agraria</option>
                    <option value="12">16 Medio Ambiente y Recursos Naturales</option>
                    <option value="13">17 Procuraduría General de la Republica</option>
                    <option value="14">18 Energía</option>
                    <option value="15">20 Desarrollo Social</option>
                    <option value="16">21 Turismo</option>
                    <option value="17">27 Función Pública</option>
                    <option value="18">37 Consejería  Jurídica del Ejecutivo Federal</option>
                    <option value="19">38 Ciencia y Tecnológia</option>
                    <option value="20">48 Cultura</option>
                </select><br/>
                <input class="form-control" placeholder="Registrar el nombre de la Institución"/><br/>
                <input class="form-control" type="number" placeholder="Ingresar el año (4 dígitos)"/><br/>
                <input class="form-control" placeholder="Nombre y Apellidos de la titular"/><br/>
                <input class="form-control pt-2" placeholder="Nombre y Apellidos del Coordinador"/><br/>
                <input class="form-control pt-2" placeholder="Nombre y Apellidos"/>
            </div>
        </div>
    </div>
    <a href="MatrizRiesgos.php"><button type="button" class="btn btn-primary bg-blue-600 float-right mr-10">Siguiente</button></a>
</body>
</html>
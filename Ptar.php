<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico"/>
    <title>Programa Trabajo Anual Realizado </title>
    <link rel="stylesheet" href="styles/matrizRiesgos.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    
</head>
<body>
    <?php include("NavBar.php"); ?>
    <div class="container" >
        <h1 class="mt-6 mb-4 text-3xl xl:text-4xl font-bold text-gray-800 text-center text-center">Programa de Trabajo Anual Realizado</h1>
        <div class="row clearfix">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-hover table-sortable" >
                    <thead>
                        <tr>
                            <th>No. Riesgo</th>
                            <th>Descripción del Riesgo</th>
                            <th>Clasificación del Riesgo</th>
                            <th>Valor del impacto</th>
                            <th>Valor de Probabilidad</th>
                            <th>Cuadrante</th>
                            <th>Estrategia</th>
                            <th>No. Factor de Riesgo</th>
                            <th>Factor de Riesgo</th>
                            <th>Desripción de la Acción de control</th>
                            <th>Unidad Administrativa</th>
                            <th>Responsable</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha de Término</th>
                            <th>Medios de Verificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <Input type="text" placeholder="No.Riesgo"></Input>
                            </td>
                            <td>
                                <Input type="text" placeholder="De"></Input>
                            </td>
                            <td>
                                <Input type="text" placeholder="No.Riesgo"></Input>
                            </td>
                            <td>
                                <Input type="text" placeholder="No.Riesgo"></Input>
                            </td>
                            <td>
                                <Input type="text" placeholder="No.Riesgo"></Input>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>       
        <button type="button" class="btn btn-primary bg-blue-600 float-right">Cargar Datos</button>
    </div>
</body>
</html>
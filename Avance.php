<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico"/>
    <title>Avance</title>
    <link rel="stylesheet" href="styles/matrizRiesgos.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <?php include("NavBar.php"); ?>
    <div class="container">
        <h1 class='mt-6 mb-4 text-3xl xl:text-4xl font-bold text-gray-800 text-center'>Avance</h1>
        <div class="row clearfix">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-hover table-sortable" >
                    <thead>
                        <tr class="text-center">
                            <th>No. Riesgo</th>
                            <th>Descripción del Riesgo</th>
                            <th>Clasificación del Riesgo</th>
                            <th>No. Factor de Riesgo</th>
                            <th>Factor de Riesgo</th>
                            <th>Descripción de la acción de Control</th>
                            <th>Unidad Administrativa</th>
                            <th>Responsable</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha de termino</th>
                            <th>Medios de Verificación</th>
                            <th>1er. Trimestre</th>
                            <th>2do. Trimestre</th>
                            <th>3er. Trimestre</th>
                            <th>4to. Trimestre</th>
                            <th>Avance Acumulado</th>
                            <th>Actividades realizadas</th>
                            <th>Descripción</th>
                            <th>Unidad de Medida</th>
                            <th>Meta Absoluta (Anual)</th>
                            <th>Enero</th>
                            <th>Febrero</th>
                            <th>Marzo</th>
                            <th>Abril</th>
                            <th>Mayo</th>
                            <th>Junio</th>
                            <th>Julio</th>
                            <th>Agosto</th>
                            <th>Septiembre</th>
                            <th>Octubre</th>
                            <th>Noviembre</th>
                            <th>Diciembre</th>
                            <th>Meta Alcanzada</th>
                            <th>Porcentaje de cumplimiento</th>
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
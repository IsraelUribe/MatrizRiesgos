<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico"/>
    <link rel="stylesheet" href="styles/matrizRiesgos.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <title>Mapa de Riesgos</title>
</head>
<body>
    <?php include("NavBar.php"); ?>
    <div class="container">
        <h1 class="mt-6 mb-4 text-3xl xl:text-4xl font-bold text-gray-800 text-center text-center">Mapa de Riesgos</h1>
        <div class="row clearfix">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-hover table-sortable" >
                    <thead>
                        <tr>
                            <th rowSpan="3">No. de Riesgo</th>
                            <th rowSpan="3">Riesgo</th>
                            <th rowSpan="3">Clasificación del Riesgo</th>
                            <th colSpan="2">III. VALORACIÓN DE RISGOS VS.CONTROLES</th>
                        </tr>
                        <tr> 
                            <th colSpan="2">Valoración final</th>
                        </tr>
                        <tr>
                            <th>Grado de impacto</th>
                            <th>Probabilidad de Ocurencia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" placeholder="No.Riesgo"></input>
                            </td>
                            <td>
                                <input type="text" placeholder="De"></input>
                            </td>
                            <td>
                                <input type="text" placeholder="No.Riesgo"></input>
                            </td>
                            <td>
                                <input type="text" placeholder="No.Riesgo"></input>
                            </td>
                            <td>
                                <input type="text" placeholder="No.Riesgo"></input>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button type="button" class="btn btn-primary bg-blue-600 float-rigth">Cargar Datos</button>
    </div>
</body>
</html>
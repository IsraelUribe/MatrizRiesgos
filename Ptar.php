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
        <form method="post" action="Ptar.php">
        <h1 class="mt-6 mb-4 text-3xl xl:text-4xl font-bold text-gray-800  text-center">Programa de Trabajo Anual Realizado</h1>
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
                    <?php 
                        require_once("DataBaseConnect.php");
                        //Carga de resposables de areas
                        $responsables = "SELECT servidor FROM areas_encargados";
                        $traerDatos = mysqli_query($conn, $responsables);
                        
                        //$usuario = strtr($conn, $_SESSION["userName"], $usuario);
                        $consultaPtar = "SELECT num_riesgo, riesgo, clasificacion_riesgo_seleccion, valoracion_inicial_grado_impacto, valoracion_inicial_prob_ocurrencia, ubicacion_cuadrante, estrategia_usar, descripcion_acciones, unidad_administrativa FROM riesgos" ;
                        $run = mysqli_query($conn, $consultaPtar);
                        $factores = "SELECT num_factor, descripcion FROM factores, riesgos WHERE factores.num_riesgo = riesgos.num_riesgo";
                        $conFac = mysqli_query($conn, $factores);
                        while($fila=mysqli_fetch_array($run)){
                            $noRiesgo = $fila[0];
                            $desRiesgo = $fila[1];
                            $claRiesgo = $fila[2];
                            $valorImpacto = $fila[3];
                            $valorProb = $fila[4];
                            $cuadrante = $fila[5];
                            $estrategiaUsar = $fila[6];
                            /* $noFactor = $fila[7];
                            $desFactor = $fila[8]; */
                            $accionControl = $fila[7];
                            $unidadAdmin = $fila[8];
                            $i = 0;
                    
                    ?>
                        <tr rowSpan="5">
                            <td rowspan="5">
                                <?php echo $noRiesgo?>
                            </td>
                            <td rowspan="5">
                                <?php echo $desRiesgo?>
                            </td>
                            <td rowspan="5">
                                <?php echo $claRiesgo?>
                            </td>
                            <td rowspan="5">
                                <?php echo $valorImpacto?>
                            </td>
                            <td rowspan="5">
                                <?php echo $valorProb?>
                            </td>
                            <td rowspan="5">
                                <?php echo $cuadrante?>
                            </td>
                            <td rowspan="5">
                                <?php echo $estrategiaUsar?>
                            </td>
                            <td rowspan="1">
                            <?php while($row = mysqli_fetch_array($conFac)){
                                $noFactor = $row[0];
                                echo $noFactor?>
                                <?php } ?>
                            </td>
                            <td rowspan="1">
                                <?php while($rowD = mysqli_fetch_array($conFac)){
                                    $desFactor = $rowD[0];
                                    echo $desFactor?>
                                <?php } ?>
                            </td>
                            <td rowspan="5"><?php echo $accionControl?></td>
                            <td rowspan="5"><?php echo $unidadAdmin?></td>
                            <td rowspan="5">
                                <select name="responsable" aria-multiline="true">
                                    <?php 
                                        $i = 0;
                                        while( $a = mysqli_fetch_array($traerDatos)){ 
                                        ?>
                                            <option><?php echo $a[$i]?></option>
                                        <?php $i + 1;?>
                                        <?php } ?>
                                        
                                </select>
                                <?php $i = 0;?>
                            </td>
                            <td rowspan="5"><input type="date" class="form-control"></input></td>
                            <td rowspan="5"><input type="date" class="form-control"></input></td>
                            <td rowspan="5"><input type="text" class="form-control"></input></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>       
        <button type="button" class="btn btn-primary bg-blue-600 float-right" >Cargar Datos</button>
    </div>
    </form>
</body>
</html>
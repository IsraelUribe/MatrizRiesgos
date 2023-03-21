<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico"/>
    <title>Controles</title>
    <link rel="stylesheet" href="Recursos/bootstrap.min.css"/>
    <link rel="stylesheet" href="Recursos/tailwind.min.css"/>
    <script type="text/javascript" src="Recursos/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="Recursos/bootstrap.min.js"></script>
    <script type="text/javascript" src="Recursos/jquery-ui.min.js"></script>
    <script type="text/javascript" src="Recursos/jquery.min.js"></script>
    <script type="text/javascript" src="Recursos/sweetalert.min.js"></script>
</head>
<body>
    <?php include("NavBar.php"); 
        require_once("DataBaseConnect.php");
    ?>
    <form method="post" action="Controles.php">
    <?php 
            
            $select = "SELECT num_riesgo, riesgo FROM riesgos";
            
            $queryR = mysqli_query($conn,$select);
             
    ?>
    <div class="container">
        <h1 class="mt-6 mb-4 text-3xl xl:text-4xl font-bold text-gray-800 text-center">Inserción de Controles a los Factores</h1>
        <div class="row clearfix">
            <div class="col-md-12 table-responsive">
                <div class="row">
                    <div class="col">
                        <select class="form-control" name="no_riesgo" onchange="">
                            <option value="0" data-riesgo="" selected disabled>-- Seleccione un Riesgo --</option>
                            <?php
                                $i = 0;
                                while($row = mysqli_fetch_array($queryR)){ 
                                    //$data = "data-riesgo =\" $row[1]";
                                    ?>
                                       <option data-riesgo = ''><?php echo $row[$i]?></option>
                                        
                                    <?php $i + 1;?>
                                    <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        <?php
                            if(isset($_POST['guardar'])){
                                //$texto='';
                                $num = $_POST["no_riesgo"];
                               
                                
                                $riesgo = "SELECT riesgo FROM riesgos WHERE num_riesgo = '$num'";
                                $selecFactores = "SELECT num_factor FROM factores WHERE num_riesgo = '$num'";
                                $queryFactores = mysqli_query($conn, $selecFactores);
                                $obRiesgo = mysqli_query($conn, $riesgo); 
                                //echo 'es' + $obRiesgo;
                                $texto = $obRiesgo;
                                
                                
                            } else{ 
                                //echo $texto;
                            }
                        ?>
                        <select class="form-control" name="no_factor">
                            <option value="0" data-riesgo="" selected disabled>-- Seleccione un Factor --</option>
                            <?php
                                $i = 0;
                                while($fila = mysqli_fetch_array($queryFactores)){ 
                                    //$data = "data-riesgo =\" $row[1]";
                                    ?>
                                       <option name="factor" data-riesgo = ''><?php echo $fila[$i]?></option>
                                        
                                    <?php $i + 1;?>
                                    <?php } ?>
                        </select>
                        
                    </div>
                </div>
                <table class="table table-bordered table-sortable text-center align-middle mt-4" style="table-layout: fixed" >
                    <thead>
                    <!-- Cambiar el contenido de la tabla por los campos pertenecientes a la parte de los Controles -->
                        <tr>
                            <th rowSpan="">No. de Factor</th>
                            <th rowSpan="">Descripción</th>
                            <th rowSpan="">Clasificación</th>
                            <th colSpan="">Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td rowSpan="1">
                            <input class="form-control" type="number" placeholder='No.' name="numFactor"/>
                        </td>
                        <td rowSpan="1">
                            <textarea class="form-control" aria-rowspan="1" name='descripcionFac' placeholder='Descripción'></textarea>
                        </td>
                        <td rowSpan="1">
                            <select class="form-control" placeholder='Selecione' name="clasificacionFactor">
                                <option value="Humano">Humano</option>
                                <option value="Financiero - Presupuestal">Financiero - Presupuestal</option>
                                <option value="Técnico - Administrativo">Técnico - Administrativo</option>
                                <option value="TICs">TIC's</option>
                                <option value="Material">Material</option>
                                <option value="Normativo">Normativo</option>
                                <option value="Entorno">Entorno</option>
                            </select>
                        </td>
                        <td rowSpan="1">
                            <select class="form-control" name="tipoFactor">
                                <option value="Interno">Interno</option>
                                <option value="Externo">Externo</option>
                            </select>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
        <input type="submit" class="btn btn-primary bg-blue-600 float-rigth" name="guardar" id="guardar" value="Guardar Controles"/>
    </div>
    
    </form>
</body>
</html>
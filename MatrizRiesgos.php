<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico"/>
    <title>Matríz de Administración de Riesgos Institucional</title>
    <link rel="stylesheet" href="styles/matrizRiesgos.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script>
        function NuevaFila(e){//Función para insertar filas en la tabla de matíz de riesgos
            e.preventDefault();
            var tabla = document.getElementById("tabla-mr"); 
            var fila = document.getElementById("filaRegistro").cloneNode(true);
            fila.in
            tabla.appendChild(fila);
        }
    </script>
    <script>
        function EliminarFila(e){//función para elimiar una fila de la tabla matríz de riesgos
            document.getElementById("filaRegistro").remove();
        }
    </script>
</head>
<body>
    <?php include("NavBar.php"); ?>
    <form method="post" action="MatrizRiesgos.php">
        <div class="container">
            <h1 class="mt-6 mb-4 text-3xl xl:text-4xl font-bold text-gray-800 text-center">Matríz de Administración de Riesgos</h1>
            <div class="row clearfix">
        	    <div class="col-md-12 table-responsive">
    			    <table class="table table-bordered table-sortable text-center align-middle" id="tabla-mr">
                        <thead>
                        <tr class="text-center">
                            <th colSpan="16">l. Evaluación de riesgos</th>
                            <th colSpan="10">ll. Evaluación de Controles</th>
                            <th colSpan="2">lll.Valoración de Riesgos vs. Controles</th>
                            <th colSpan="4">lV. Mapa de Riesgos</th>
                            <th colSpan="2">V. Estrategias y Acciones</th>
                        </tr>
                        <tr class='text-center'>
                            <th rowSpan="2" class='text-center'>Riesgo</th>
                            <th rowSpan="2">Unidad</th>
                            <th colSpan="2">Alineación a Estrategias, Objetivos, o Metas Institucionales</th>
                            <th rowSpan="2">Riesgo</th>
                            <th rowSpan="2">Nivel de decisión del Riesgo</th>
                            <th colSpan="2">Clasificación del Riesgo</th>
                            <th colSpan="4">FACTOR</th>
                            <th rowSpan="2">Posibles efectos de Riesgo</th>
                            <th colSpan="3">Valoración inicial</th>
                            <th rowSpan="2">¿Tiene controles?</th>
                            <th colSpan="3">Control</th>
                            <th colSpan="5">Determinación de Suficiencia o Deficiencia del Control</th>
                            <th rowSpan="2">Riesgo Controlado Suficientemente</th>
                            <th colSpan="2">Valoración Final</th>
                            <th colSpan="4">Ubicación en cuadrantes</th>
                            <th rowSpan="2">Estrategia para Administrar el Riesgo</th>
                            <th rowSpan="2">Desripción de la(s) Acción(es)</th>
                        </tr>
                        <tr class="text-center">
                            <th>Selección</th>
                            <th>Descripción</th>
                            <th>Selección</th>
                            <th>Especificar otro</th>
                            <th>No.Factor</th>
                            <th>Descripción</th>
                            <th>Clasificación</th>
                            <th>Tipo</th>
                            <th>Grado impacto</th>
                            <th>Probabilidad Ocurrencia</th>
                            <th>Cuadrante</th>
                            <th>No. Control</th>
                            <th>Descripción</th>
                            <th>Tipo</th>
                            <th>Está Documentado</th>
                            <th>Está Formalizado</th>
                            <th>Se Aplica</th>
                            <th>Es Efectivo</th>
                            <th>Resultado de la determinación de control</th>
                            <th>Grado de impacto</th>
                            <th>Probabilidad de Ocurencia</th>
                            <th>I</th>
                            <th>II</th>
                            <th>III</th>
                            <th>IV</th>
                        </tr>
                        </thead>
                        <tbody >
                        <?php
                            require_once("DataBaseConnect.php");
                            //Cargar datos de la BD en campos de la tabla
                            $areas = "SELECT area FROM areas_encargados";
                            $ejecutar = mysqli_query($conn, $areas);
                            
                            
                            if (isset($_POST['guardar'])) {
                                $noRiesgo = $_POST["numRiesgo"];
                                $unidad = $_POST["unidad"];
                                $alineacion = $_POST["alineacion"];
                                $descripAlineacion = $_POST["desAlineacion"];
                                $riesgo = $_POST["riesgo"];
                                $nivel = $_POST["nivel"];
                                $seleccion = $_POST["seleccion"];
                                $otro = $_REQUEST['otro'];
                                //variabeles tabla factores
                                /* 
                                
                                } */
                                
                                $factor1 = $_POST["numFactor"];
                                $descripcionF1 = $_POST["descripcionF1"];
                                $clasFa1 = $_POST["clasificacionFactor"];
                                $tipoFac = $_POST["tipoFactor0"];
                                $efecto = $_REQUEST["efectoRiesgo"]; 
                                $gradoImpacto = $_REQUEST["gradoImpacto0"];
                                $ocurrenciaInicial = $_REQUEST["ocurrenciaInicial"];
                                $cuadrante = $_REQUEST["cuadrante0"];
                                $opControl = $_REQUEST["tieneControles0"];
                                /*$numControl = mysqli_escape_string($conn,$_POST["numControl0"]);
                                $desControl = mysqli_escape_string($conn,$_POST["desControl"]);
                                $tipoControl = mysqli_escape_string($conn, $_POST["tipoControl0"]);
                                $documentado = mysqli_escape_string($conn,$_POST["documentado"]);
                                $formalizado = mysqli_escape_string($conn,$_POST["formalizado"]);
                                $seAplica = mysqli_escape_string($conn,$_POST["seAplica"]);
                                $esEfectivo = mysqli_escape_string($conn,$_POST["esEfectivo"]);
                                $resultado = mysqli_escape_string($conn,$_POST["resultado0"]); */
                                $controlado = mysqli_escape_string($conn,$_REQUEST["Controlado"]);
                                $impactoValoracion = $_REQUEST["gradoImpactoValoracion0"];
                                $probOcurrencia = $_REQUEST["probOcurrencia"];
                                $p1 = mysqli_escape_string($conn,$_REQUEST["p1"]);
                                /* $p2 = $_POST["p2"];
                                $p3 = $_POST["p3"];
                                $p4 = $_POST["p4"]; */
                                $estrategia = mysqli_real_escape_string($conn, $_REQUEST["estrategia"]);
                                $desAcciones =  $_REQUEST["desAccion"];
                                
                                $user = mysqli_real_escape_string($conn, $_SESSION["userName"]);
                                $usuario = strval($user);
                                /* $factor2 = $_POST["numFactor2"];
                                $factor3 = $_POST["numFactor3"];
                                $factor4 = $_POST["numFactor4"];
                                $factor5 = $_POST["numFactor5"];
                                
                                
                                $descripcionF2 = $_POST["descripcionF2"];
                                $descripcionF3 = $_POST["descripcionF3"];
                                $descripcionF4 = $_POST["descripcionF4"];
                                $descripcionF5 = $_POST["descripcionF5"];
                                
                                $clasFa1 = $_POST["clasificacionFactor"];
                                $clasFa2 = $_POST["clasificacionFactor2"];
                                $clasFa3 = $_POST["clasificacionFactor3"];
                                $clasFa4 = $_POST["clasificacionFactor4"];
                                $clasFa4 = $_POST["clasificacionFactor5"];
                        
                                $tipoFac = $_POST["tipoFactor0"];
                                $tipoFac2 = $_POST["tipoFactor1"];
                                $tipoFac3 = $_POST["tipoFactor2"];
                                $tipoFac4 = $_POST["tipoFactor3"];
                                $tipoFac5 = $_POST["tipoFactor4"]; */
                                $anio = mysqli_real_escape_string($conn, date("Y"));
                                $anMatriz = strval($anio);
                                
                                $insertar = "INSERT INTO riesgos VALUES ('$noRiesgo','$unidad','$alineacion','$descripAlineacion','$riesgo','$nivel','$seleccion','$otro',$efecto','$gradoImpacto','$ocurrenciaInicial','$cuadrante','$opControl','$controlado','$impactoValoracion','$probOcurrencia','$p1','$estrategia','$desAcciones', '$anMatriz','$usuario')";
                                //$insertar = "INSERT INTO factores VALUES ('$factor1','$descripcionF1','$clasFa1','$tipoFac','$noRiesgo')";
                                //$insertar = "INSERT INTO controles VALUES ('$numControl','$desControl',$tipoControl','$documentado','$formalizado','$seAplica','$esEfectivo','$resultado','$factor1')";
                                if(mysqli_query($conn,$insertar)){
                                    /* header("Location: MatizRiesgos.php"); */
                                }else{
                                    echo "<div class='form'><h3>incorrect.</h3><br/>Haga clic aquí para <a href='MatrizRiesgos.php'>volver</a></div>";
                                }
                            }
                        ?>
                        <tr id="filaRegistro"  class="align-middle" rowSpan="5">
                                <td rowSpan="5">
                                    <input type="text" placeholder='No. riesgo' value="" name="numRiesgo"/>
                                </td>
                                <td rowSpan="5">
                                    <select name="unidad">
                                        <?php
                                            $i = 0;
                                            while($row=mysqli_fetch_array($ejecutar)){ 
                                                ?>
                                                    <option><?php echo $row[$i]?></option>
                                                <?php $i + 1;?>
                                                <?php
                                                
                                                } ?>
                                    </select>
                                </td>
                                <td rowSpan="5">
                                    <select placeholder="seleccione" name="alineacion">
                                        <option value="1">Estrategia</option>
                                        <option value="2">Objetivo</option>
                                        <option value="3">Meta</option>
                                        <option value="4">Proceso</option>
                                    </select>
    
                                </td>
                                <td rowSpan="5">
                                    <textarea placeholder="Descripción" name="desAlineacion"class=""></textarea>
                                </td>
                                <td rowSpan="5">
                                    <input type="text" placeholder='riesgo' name="riesgo"/>
                                </td>
                                <td rowSpan="5">
                                    <select placeholder='nivel' name="nivel">
                                        <option value="1">Estratégico</option>
                                        <option value="2">Directivo</option>
                                        <option value="3">Operativo</option>
                                    </select>
                                </td >
                                <td rowSpan="5">
                                    <select placeholder='seleccion' name="seleccion">
                                        <option value="1">Sustantivo</option>
                                        <option value="2">Administrativo</option>
                                        <option value="3">Legal</option>
                                        <option value="4">Financiero</option>
                                        <option value="5">Presupuestal</option>
                                        <option value="6">De Servicios</option>
                                        <option value="7">De Seguridad</option>
                                        <option value="8">De Obra Pública</option>
                                        <option value="9">De Recursos Humanos</option>
                                        <option value="10">De Imagen</option>
                                        <option value="11">De Tic's</option>
                                        <option value="12">De Salud</option>
                                        <option value="13">De Corrupción</option>
                                        <option value="14">Otros</option>
                                    </select>
                                </td>
                                <td rowSpan="5">
                                    <input type="text" placeholder='otro' name="otro"/>
                                </td>
                                <td rowSpan="1">
                                    <input class="row" type="number" placeholder='No.' name="numFactor"/><p/><p/>
                                </td>
                                <td rowSpan="1">
                                    <textarea aria-rowspan="1" name='descripcionF1' placeholder='Descripción'></textarea>
                                </td>
                                <td rowSpan="1">
                                    <select placeholder='Selecione' name="clasificacionFactor">
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
                                    <select name="tipoFactor0">
                                    <option value="Interno">Interno</option>
                                    <option value="Externo">Externo</option>
                                    </select>
                                </td>
                                <td rowSpan="5" data-name="efecto">
                                    <textarea  name='efectoRiesgo' placeholder='Efecto' class="w-full"></textarea>
                                </td>
                                <td rowSpan="5"  >
                                    <select name="gradoImpacto0" placeholder='Selecione'>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                                <td rowSpan="5"  data-name="probOcurrenciaInicial">
                                    <select name="ocurrenciaInicial" placeholder='Selecione'>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                                <td rowSpan="5">
                                    <input type="text" name='cuadrante0' placeholder='Cuadrante' class=" w-full"/>
                                </td>
                                <td rowSpan="5">
                                    <select name="tieneControles0">
                                        <option value="SI">SI</option>
                                        <option value="SI">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1">
                                    <input type="text" name='numControl' placeholder='No.' class=" w-full"/>
                                </td>
                                <td rowSpan="1" data-name="descripcionContol">
                                    <input type="text" name='desControl' placeholder='Descripción' class=" w-full"/>
                                </td>
                                <td rowSpan="1">
                                    <select name="tipoControl0">
                                        <option value="1">Preventivo</option>
                                        <option value="2">Detectivo</option>
                                        <option value="3">Correctivo</option>
                                    </select>
                                </td>
                                <td rowSpan="1">
                                    <select name="documentado0">
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="formalizado">
                                    <select name="formalizado0">
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="seAplica">
                                    <select name="seAplica0">
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="esEfectivo">
                                    <select name="esEfectivo0">
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="resultado">
                                    <input type="text" name='resultado0' placeholder='Determinación' />
                                </td>
                                <td rowSpan="1"><input type="text" name="Controlado" placeholder="pendiente">  </input></td>
                                <td rowSpan="5" data-name="gradoImpactoValoracion">
                                    <select name="gradoImpactoValoracion0" placeholder='Selecione' class=''>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                                <td rowSpan="5" data-name="probabilidadOcurrencia">
                                    <select name="probOcurrencia" placeholder='Selecione' class=''>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                                <td rowSpan="5">
                                    <input type="text" name="p1" placeholder="pendiente">  </input>
                                </td>
                                <td rowSpan="5">
                                    <input type="text" name="p2" placeholder="pendiente">  </input>
                                </td>
                                <td rowSpan="5">
                                    <input type="text" name="p3" placeholder="pendiente">  </input>
                                </td>
                                <td rowSpan="5">
                                    <input type="text" name="p4" placeholder="pendiente">  </input>
                                </td>
                                <td rowSpan="5" data-name="estrategiaUsar">
                                    <select name="estrategia" placeholder='Selecione' class=''>
                                        <option value="1">Evitar el Riesgo</option>
                                        <option value="2">Reducir el Riesgo</option>
                                        <option value="3">Asumir el Resigo</option>
                                        <option value="4">Compartir el Riesgo</option>
                                    </select>
                                </td>
                                <td rowSpan="5" data-name="descripcionAccion">
                                    <textarea name='desAccion' placeholder='Descripción' class=''></textarea>
                                </td>
                                <td rowSpan="5" data-name="del">
                                    <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove' onclick="EliminarFila()"><span aria-hidden="true">×</span></button>
                                </td>
                            </tr>
                            
                            
                            <!-- Filas Factores -->
                            <tr>
                                <td rowSpan="1">
                                    <input class="row" type="number" placeholder='No.' name="numFactor2"/><p/><p/>
                                </td>
                                <td rowSpan="1">
                                    <textarea aria-rowspan="1" name='descripcionF2' placeholder='Descripción'></textarea>
                                </td>
                                <td rowSpan="1">
                                    <select placeholder='Selecione' name="clasificacionFactor2">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Humano</option>
                                        <option value="2">Financiero - Presupuestal</option>
                                        <option value="3">Técnico - Administrativo</option>
                                        <option value="4">TIC's</option>
                                        <option value="5">Material</option>
                                        <option value="6">Normativo</option>
                                        <option value="7">Entorno</option>
                                    </select>
                                </td>
                                <td rowSpan="1">
                                    <select name="tipoFactor01">
                                    <option value="">Seleccione</option>
                                    <option value="1">Interno</option>
                                    <option value="2">Externo</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td rowSpan="1">
                                    <input class="row" type="number" placeholder='No.' name="numFactor3"/><p/><p/>
                                </td>
                                <td rowSpan="1">
                                    <textarea aria-rowspan="1" name='descripcionF3' placeholder='Descripción'></textarea>
                                </td>
                                <td rowSpan="1">
                                    <select placeholder='Selecione' name="clasificacionFactor3">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Humano</option>
                                        <option value="2">Financiero - Presupuestal</option>
                                        <option value="3">Técnico - Administrativo</option>
                                        <option value="4">TIC's</option>
                                        <option value="5">Material</option>
                                        <option value="6">Normativo</option>
                                        <option value="7">Entorno</option>
                                    </select>
                                </td>
                                <td rowSpan="1">
                                    <select name="tipoFactor2">
                                    <option value="">Seleccione</option>
                                    <option value="1">Interno</option>
                                    <option value="2">Externo</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td rowSpan="1">
                                    <input class="row" type="number" placeholder='No.' name="numFactor4"/><p/><p/>
                                </td>
                                <td rowSpan="1">
                                    <textarea aria-rowspan="1" name='descripcionF4' placeholder='Descripción'></textarea>
                                </td>
                                <td rowSpan="1">
                                    <select placeholder='Selecione' name="clasificacionFactor4">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Humano</option>
                                        <option value="2">Financiero - Presupuestal</option>
                                        <option value="3">Técnico - Administrativo</option>
                                        <option value="4">TIC's</option>
                                        <option value="5">Material</option>
                                        <option value="6">Normativo</option>
                                        <option value="7">Entorno</option>
                                    </select>
                                </td>
                                <td rowSpan="1">
                                    <select name="tipoFactor3">
                                    <option value="">Seleccione</option>
                                    <option value="1">Interno</option>
                                    <option value="2">Externo</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td rowSpan="1">
                                    <input class="row" type="number" placeholder='No.' name="numFactor5"/><p/><p/>
                                </td>
                                <td rowSpan="1">
                                    <textarea aria-rowspan="1" name='descripcionF5' placeholder='Descripción'></textarea>
                                </td>
                                <td rowSpan="1">
                                    <select placeholder='Selecione' name="clasificacionFactor5">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Humano</option>
                                        <option value="2">Financiero - Presupuestal</option>
                                        <option value="3">Técnico - Administrativo</option>
                                        <option value="4">TIC's</option>
                                        <option value="5">Material</option>
                                        <option value="6">Normativo</option>
                                        <option value="7">Entorno</option>
                                    </select>
                                </td>
                                <td rowSpan="1">
                                    <select name="tipoFactor4">
                                    <option value="">Seleccione</option>
                                    <option value="1">Interno</option>
                                    <option value="2">Externo</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <!-- Filas controles -->
                            <!-- <tr rowSpan="1">
                                <td rowSpan="1">
                                    <input type="text" name='numControl' placeholder='No.' class=" w-full"/>
                                </td>
                                <td rowSpan="1" data-name="descripcionContol">
                                    <input type="text" name='desControl' placeholder='Descripción' class=" w-full"/>
                                </td>
                                <td rowSpan="1">
                                    <select name="tipoControl0">
                                    <option value="">Seleccione</option>
                                    <option value="1">Preventivo</option>
                                    <option value="2">Detectivo</option>
                                    <option value="3">Correctivo</option>
                                    </select>
                                </td>
                                <td rowSpan="1">
                                    <select name="documentado0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="formalizado">
                                    <select name="formalizado0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="seAplica">
                                    <select name="seAplica0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="esEfectivo">
                                    <select name="esEfectivo0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="resultado">
                                    <input type="text" name='resultado0' placeholder='Determinación' />
                                </td>
                                <td rowSpan="1">pendiente</td>
                            </tr>
                            <tr rosSpan="1">
                                <td rowSpan="1">
                                    <input type="text" name='numControl' placeholder='No.' class=" w-full"/>
                                </td>
                                <td rowSpan="1" data-name="descripcionContol">
                                    <input type="text" name='desControl' placeholder='Descripción' class=" w-full"/>
                                </td>
                                <td rowSpan="1">
                                    <select name="tipoControl0">
                                    <option value="">Seleccione</option>
                                    <option value="1">Preventivo</option>
                                    <option value="2">Detectivo</option>
                                    <option value="3">Correctivo</option>
                                    </select>
                                </td>
                                <td rowSpan="1">
                                    <select name="documentado0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="formalizado">
                                    <select name="formalizado0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="seAplica">
                                    <select name="seAplica0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="esEfectivo">
                                    <select name="esEfectivo0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="resultado">
                                    <input type="text" name='resultado0' placeholder='Determinación' />
                                </td>
                                <td rowSpan="1">pendiente</td>
                            </tr>
                            <tr rowSpan="1">
                                <td rowSpan="1">
                                    <input type="text" name='numControl' placeholder='No.' class=" w-full"/>
                                </td>
                                <td rowSpan="1" data-name="descripcionContol">
                                    <input type="text" name='desControl' placeholder='Descripción' class=" w-full"/>
                                </td>
                                <td rowSpan="1">
                                    <select name="tipoControl0">
                                    <option value="">Seleccione</option>
                                    <option value="1">Preventivo</option>
                                    <option value="2">Detectivo</option>
                                    <option value="3">Correctivo</option>
                                    </select>
                                </td>
                                <td rowSpan="1">
                                    <select name="documentado0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="formalizado">
                                    <select name="formalizado0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="seAplica">
                                    <select name="seAplica0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="esEfectivo">
                                    <select name="esEfectivo0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="resultado">
                                    <input type="text" name='resultado0' placeholder='Determinación' />
                                </td>
                                <td rowSpan="1">pendiente</td>
                            </tr>
                            <tr rowSpan="1">
                                <td rowSpan="1">
                                    <input type="text" name='numControl' placeholder='No.' class=" w-full"/>
                                </td>
                                <td rowSpan="1" data-name="descripcionContol">
                                    <input type="text" name='desControl' placeholder='Descripción' class=" w-full"/>
                                </td>
                                <td rowSpan="1">
                                    <select name="tipoControl0">
                                    <option value="">Seleccione</option>
                                    <option value="1">Preventivo</option>
                                    <option value="2">Detectivo</option>
                                    <option value="3">Correctivo</option>
                                    </select>
                                </td>
                                <td rowSpan="1">
                                    <select name="documentado0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="formalizado">
                                    <select name="formalizado0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="seAplica">
                                    <select name="seAplica0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="esEfectivo">
                                    <select name="esEfectivo0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td rowSpan="1" data-name="resultado">
                                    <input type="text" name='resultado0' placeholder='Determinación' />
                                </td>
                                <td rowSpan="1">pendiente</td> -->
                            </tr> 
                        </tbody>
                    </table>
                </div>
            </div>
            <button id="add_row" class="btn btn-primary bg-blue-600 float-right" onclick="NuevaFila();">Add Row</button>
            <button type="submit" class="btn btn-primary bg-blue-600 float-left" name="guardar">Guardar</button>
        </div>
    </form>
</body>
</html>


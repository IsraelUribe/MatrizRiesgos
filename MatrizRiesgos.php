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
        function NuevaFila(){//Función para insertar filas en la tabla de matíz de riesgos
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
    <?php include("NavBar.php"); ?><!-- Cógigo PHP para incluir un archivo PHP dentro de otro archivo, contiene lo que es la NavBar.php -->
    <div class="container">
        <form method="post">
            <h1 class="mt-6 mb-4 text-3xl xl:text-4xl font-bold text-gray-800 text-center">Matríz de Administración de Riesgos</h1>
            <div class="row clearfix">
        	    <div class="col-md-12 table-responsive">
    			    <table class="table table-bordered table-hover table-sortable" id="tabla-mr">
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
                        <tbody>
                            <?php
                                require_once("DataBaseConnect.php");
                                if (isset($_POST['guardar'])) {
                                    $noRiesgo = $_POST["numRiesgo"];
                                    $unidad = $_POST["unidad"];
                                    $alineacion = $_POST["alineacion"];
                                    $descripAlineacion = $_POST["desAlineacion"];
                                    $riesgo = $_POST["riesgo"];
                                    $nivel = $_POST["nivel"];
                                    $seleccion = $_POST["seleccion"];
                                    $otro = $_POST["otro"];
                                    //variabeles tabla factores
                                    /* 
                                    
                                    } */
                                    $factor1 = $_POST["numFactor"];
                                    $factor2 = $_POST["numFactor2"];
                                    $factor3 = $_POST["numFactor3"];
                                    $factor4 = $_POST["numFactor4"];
                                    $factor5 = $_POST["numFactor5"];
                                    
                                    $descripcionF1 = $_POST["descripcionF1"];
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
                                    $tipoFac5 = $_POST["tipoFactor4"];
                                    
                                    
                                    $insertarRiesgo = "INSERT INTO riesgos VALUES ('$noRiesgo','$unidad','$alineacion','$descripAlineacion','$riesgo','$nivel','$seleccion','$otro')";
                                    if(mysqli_query($conn, $insertarRiesgo)){
                                        header("Location: MapaRiesgos.php");
                                    }else{
                                        echo "<div class='form'><h3>incorrect.</h3><br/>Haga clic aquí para <a href='MatrizRiesgos.php'>volver</a></div>";
                                    }
                                    
                                }
                            ?>
                            <tr id="filaRegistro"  class="hidden" rowSpan="5">
                                <td >
                                    <input type="text" placeholder='No. riesgo' value="" name="numRiesgo"/>
                                </td>
                                <td >
                                    <textarea  placeholder='Unidad' name="unidad"></textarea>
                                </td>
                                <td >
                                    <select placeholder="seleccione" name="alineacion">
                                        <option value="1">Estrategia</option>
                                        <option value="2">Objetivo</option>
                                        <option value="3">Meta</option>
                                        <option value="4">Proceso</option>
                                    </select>
    
                                </td>
                                <td>
                                    <textarea placeholder="Descripción" name="desAlineacion"class=""></textarea>
                                </td>
                                <td >
                                    <input type="text" placeholder='riesgo' name="riesgo"/>
                                </td>
                                <td >
                                    <select placeholder='nivel' name="nivel">
                                        <option value="1">Estratégico</option>
                                        <option value="2">Directivo</option>
                                        <option value="3">Operativo</option>
                                    </select>
                                </td >
                                <td >
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
                                <td >
                                    <input type="text" placeholder='otro' name="otro"/>
                                </td>
                                <td>
                                    <input class="row" type="number" placeholder='No.' name="numFactor"/><p/><p/>
                                    <input class="row" type="number" placeholder='No.' name="numFactor2" /><p/><p/>
                                    <input class="row" type="number" placeholder='No.' name="numFactor3"/><p/><p/>
                                    <input class="row" type="number" placeholder='No.' name="numFactor4"/><p/><p/>
                                    <input class="row" type="number" placeholder='No.' name="numFactor5"/>
                                </td>
                                <td>
                                    <textarea aria-rowspan="1" name='descripcionF1' placeholder='Descripción'></textarea>
                                    <textarea aria-rowspan="1" name='descripcionF2' placeholder='Descripción'></textarea>
                                    <textarea aria-rowspan="1" name='descripcionF3' placeholder='Descripción'></textarea>
                                    <textarea aria-rowspan="1" name='descripcionF4' placeholder='Descripción'></textarea>
                                    <textarea aria-rowspan="1" name='descripcionF5' placeholder='Descripción'></textarea>
                                </td>
                                <td >
                                    <select placeholder='Selecione' name="clasificacionFactor">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Humano</option>
                                        <option value="2">Financiero - Presupuestal</option>
                                        <option value="3">Técnico - Administrativo</option>
                                        <option value="4">TIC's</option>
                                        <option value="5">Material</option>
                                        <option value="6">Normativo</option>
                                        <option value="7">Entorno</option>
                                    </select>
                                    <p></p>
                                    <select placeholder='Selecione' name="clasificacionFactor2">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Humano</option>
                                        <option value="2">Financiero - presupuestal</option>
                                        <option value="3">Técnico - Administrativo</option>
                                        <option value="4">TIC's</option>
                                        <option value="5">Material</option>
                                        <option value="6">Normativo</option>
                                        <option value="7">Entorno</option>
                                    </select>
                                    <p></p>
                                    <select placeholder='Selecione' name="clasificacionFactor3">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Humano</option>
                                        <option value="2">Financiero - presupuestal</option>
                                        <option value="3">Técnico - Administrativo</option>
                                        <option value="4">TIC's</option>
                                        <option value="5">Material</option>
                                        <option value="6">Normativo</option>
                                        <option value="7">Entorno</option>
                                    </select>
                                    <p></p>
                                    <select placeholder='Selecione' name="clasificacionFactor4">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Humano</option>
                                        <option value="2">Financiero - presupuestal</option>
                                        <option value="3">Técnico - Administrativo</option>
                                        <option value="4">TIC's</option>
                                        <option value="5">Material</option>
                                        <option value="6">Normativo</option>
                                        <option value="7">Entorno</option>
                                    </select>
                                    <p></p>
                                    <select placeholder='Selecione' name="clasificacionFactor5">
                                        <option value="">Seleccione</option>
                                        <option value="1">Humano</option>
                                        <option value="2">Financiero - presupuestal</option>
                                        <option value="3">Técnico - Administrativo</option>
                                        <option value="4">TIC's</option>
                                        <option value="5">Material</option>
                                        <option value="6">Normativo</option>
                                        <option value="7">Entorno</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="tipoFactor0">
                                    <option value="">Seleccione</option>
                                    <option value="1">Interno</option>
                                    <option value="2">Externo</option>
                                    </select>
                                    <p></p>
                                    <select name="tipoFactor1">
                                    <option value="">Seleccione</option>
                                    <option value="1">Interno</option>
                                    <option value="2">Externo</option>
                                    </select>
                                    <p></p>
                                    <select name="tipoFactor2">
                                    <option value="">Seleccione</option>
                                    <option value="1">Interno</option>
                                    <option value="2">Externo</option>
                                    </select>
                                    <p></p>
                                    <select name="tipoFactor3">
                                    <option value="">Seleccione</option>
                                    <option value="1">Interno</option>
                                    <option value="2">Externo</option>
                                    </select>
                                    <p></p>
                                    <select name="tipoFactor4">
                                    <option value="">Seleccione</option>
                                    <option value="1">Interno</option>
                                    <option value="2">Externo</option>
                                    </select>
                                </td>
                                <td data-name="efecto">
                                    <textarea  name='efectoRiesgo' placeholder='Efecto' class=" w-full"></textarea>
                                </td>
                                <td data-name="desFactor">
                                    <textarea  name='descFactor' placeholder='Descripción' class=" w-full"></textarea>
                                </td>
                                <td data-name="gradoImpacto">
                                    <select name="gradoImpacto0" placeholder='Selecione'>
                                    <option value="">Seleccione</option>
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
                                <td>
                                    <input type="text" name='cuadrante0' placeholder='Cuadrante' class=" w-full"/>
                                </td>
                                <td>
                                    <select name="tieneControles0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name='numControl' placeholder='No.' class=" w-full"/>
                                </td>
                                <td data-name="descripcionContol">
                                    <input type="text" name='desControl' placeholder='Descripción' class=" w-full"/>
                                </td>
                                <td>
                                    <select name="tipoControl0">
                                    <option value="">Seleccione</option>
                                    <option value="1">Preventivo</option>
                                    <option value="2">Detectivo</option>
                                    <option value="3">Correctivo</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="documentado0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td data-name="formalizado">
                                    <select name="formalizado0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td data-name="seAplica">
                                    <select name="seAplica0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td data-name="esEfectivo">
                                    <select name="esEfectivo0">
                                    <option value="">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    </select>
                                </td>
                                <td data-name="resultado">
                                    <input type="text" name='resultado0' placeholder='Determinación' />
                                </td>
                                <td>pendiente</td>
                                <td data-name="gradoImpactoValoracion">
                                    <select name="gradoImpactoCaloracion0" placeholder='Selecione' class=''>
                                    <option value="">Seleccione</option>
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
                                <td data-name="probabilidadOcurrencia">
                                    <select name="probOcurrencia" placeholder='Selecione' class=''>
                                    <option value="">Seleccione</option>
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
                                <td>
                                    pendiente
                                </td>
                                <td>
                                    pendiente
                                </td>
                                <td>
                                    pendiente
                                </td>
                                <td>
                                    pendiente
                                </td>
                                <td data-name="estrategiaUsar">
                                    <select name="estrategia" placeholder='Selecione' class=''>
                                        <option value="">Seleccione</option>
                                        <option value="1">Evitar el Riesgo</option>
                                        <option value="2">Reducir el Riesgo</option>
                                        <option value="3">Asumir el Resigo</option>
                                        <option value="4">Compartir el Riesgo</option>
                                    </select>
                                </td>
                                <td data-name="descripcionAccion">
                                    <textarea name='desAccion' placeholder='Descripción' class=''></textarea>
                                </td>
                                <td data-name="del">
                                    <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove' onclick="EliminarFila()"><span aria-hidden="true">×</span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a id="add_row" class="btn btn-primary bg-blue-600 float-right" onclick="NuevaFila()">Add Row</a>
            <button type="submit" class="btn btn-primary bg-blue-600 float-left" name="guardar">Guardar</button>
        </form>
    </div>
</body>
</html>
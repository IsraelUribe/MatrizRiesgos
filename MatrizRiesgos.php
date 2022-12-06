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
        function NuevaFila(){
            var tabla = document.getElementById("tabla-mr"); 
            var fila = document.getElementById("filaRegistro").cloneNode(true);
            var tr = document.createElement("tr");
            tabla.appendChild(fila);
        }
    </script>
</head>
<body>
    <?php include("NavBar.php"); ?>
    <div class="container">
        <h1 class="mt-6 mb-4 text-3xl xl:text-4xl font-bold text-gray-800 text-center text-center">Matríz de Administración de Riesgos</h1>
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
                        <tr id="filaRegistro"  class="hidden">
                            <td data-name="numero">
                                <input type="text" name='NumRiesgo'  placeholder='No. riesgo' />
                            </td>
                            <td data-name="unidad">
                                <textarea  placeholder='Unidad'></textarea>
                            </td>
                            <td data-name="alineacion">
                                <input type="text" name="select" placeholder="Selección" class=""></input>
                            </td>
                            <td>
                                <textarea  name="desc" placeholder="Descripción" class=""></textarea>
                            </td>
                            <td data-name="riesgo">
                                <input type="text" name='riesgo' placeholder='riesgo' class=""/>
                            </td>
                            <td data-name="nivel">
                                <input type="text" name='nivelriesgo' placeholder='nivel' class=""/>
                            </td>
                            <td data-name="ClasifiSelec">
                                <input type="text" name='seleccionClas' placeholder='seleccion' class=""/>
                            </td>
                            <td data-name="otro">
                                <input type="text" name='otro' placeholder='otro' class=" "/>
                            </td>
                            <td data-name="nFactor" rowSpan="5">
                                <input type="text" name='numFactor' placeholder='No.' />
                                <p></p>
                                <p></p>
                                <input type="text" name='numFactor' placeholder='No.' />
                                <p></p>
                                <p></p>
                                <input type="text" name='numFactor' placeholder='No.' />
                                <p></p>
                                <p></p>
                                <input type="text" name='numFactor' placeholder='No.' />
                                <p></p>
                                <p></p>
                                <input type="text" name='numFactor' placeholder='No.' />
                            </td>
                            <td data-name="desFactor" rowSpan="5">
                                <textarea name='' placeholder='Descripción'></textarea>
                                <textarea name='' placeholder='Descripción'></textarea>
                                <textarea name='' placeholder='Descripción'></textarea>
                                <textarea name='' placeholder='Descripción'></textarea>
                                <textarea name='' placeholder='Descripción'></textarea>
                            </td>
                            <td data-name="clasiFactor" rowSpan="5">
                                <select name="clasFactor" placeholder='Selecione'>
                                    <option value="">Seleccione</option>
                                    <option value="1">Humano</option>
                                    <option value="2">Financiero - presupuestal</option>
                                    <option value="3">Técnico - Administrativo</option>
                                    <option value="4">TIC's</option>
                                    <option value="5">Material</option>
                                    <option value="6">Normativo</option>
                                    <option value="7">Entorno</option>
                                </select>
                                <p></p>
                                <select name="clasFactor" placeholder='Selecione'>
                                    <option value="">Seleccione</option>
                                    <option value="1">Humano</option>
                                    <option value="2">Financiero - presupuestal</option>
                                    <option value="3">Técnico - Administrativo</option>
                                    <option value="4">TIC's</option>
                                    <option value="5">Material</option>
                                    <option value="6">Normativo</option>
                                    <option value="7">Entorno</option>
                                </select>
                                <p></p>
                                <select name="clasFactor" placeholder='Selecione'>
                                    <option value="">Seleccione</option>
                                    <option value="1">Humano</option>
                                    <option value="2">Financiero - presupuestal</option>
                                    <option value="3">Técnico - Administrativo</option>
                                    <option value="4">TIC's</option>
                                    <option value="5">Material</option>
                                    <option value="6">Normativo</option>
                                    <option value="7">Entorno</option>
                                </select>
                                <p></p>
                                <select name="clasFactor" placeholder='Selecione'>
                                    <option value="">Seleccione</option>
                                    <option value="1">Humano</option>
                                    <option value="2">Financiero - presupuestal</option>
                                    <option value="3">Técnico - Administrativo</option>
                                    <option value="4">TIC's</option>
                                    <option value="5">Material</option>
                                    <option value="6">Normativo</option>
                                    <option value="7">Entorno</option>
                                </select>
                                <p></p>
                                <select name="clasFactor" placeholder='Selecione'>
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
                            <td data-name="tipoFactor" rowSpan="5">
                                <select name="tipoFactor0">
                                <option value="">Seleccione</option>
                                <option value="1">Interno</option>
                                <option value="2">Externo</option>
                                </select>
                                <p></p>
                                <select name="tipoFactor0">
                                <option value="">Seleccione</option>
                                <option value="1">Interno</option>
                                <option value="2">Externo</option>
                                </select>
                                <p></p>
                                <select name="tipoFactor0">
                                <option value="">Seleccione</option>
                                <option value="1">Interno</option>
                                <option value="2">Externo</option>
                                </select>
                                <p></p>
                                <select name="tipoFactor0">
                                <option value="">Seleccione</option>
                                <option value="1">Interno</option>
                                <option value="2">Externo</option>
                                </select>
                                <p></p>
                                <select name="tipoFactor0">
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
                            <td data-name="cuadrente">
                                <input type="text" name='cuadrante0' placeholder='Cuadrante' class=" w-full"/>
                            </td>
                            <td data-name="tieneContoles">
                                <select name="tieneControles0">
                                <option value="">Seleccione</option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                                </select>
                            </td>
                            <td data-name="numeroControl">
                                <input type="text" name='numControl' placeholder='No.' class=" w-full"/>
                            </td>
                            <td data-name="descripcionContol">
                                <input type="text" name='desControl' placeholder='Descripción' class=" w-full"/>
                            </td>
                            <td data-name="tipoControl">
                                <select name="tipoControl0">
                                <option value="">Seleccione</option>
                                <option value="1">Preventivo</option>
                                <option value="2">Detectivo</option>
                                <option value="3">Correctivo</option>
                                </select>
                            </td>
                            <td data-name="documentado">
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
                                <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a id="add_row" class="btn btn-primary float-right" onclick="NuevaFila()">Add Row</a>
    </div>
</body>
</html>
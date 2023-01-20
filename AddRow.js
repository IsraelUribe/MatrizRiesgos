$("add_row").click(function() {

//creo una nueva fila


var fila ='<tr id="filaRegistro"  class="hidden align-middle" rowSpan="5">'+
'<td rowSpan="5">'+
    '<input type="text" placeholder="No. riesgo" value="" name="numRiesgo"/>'+
'</td>'+
'<td rowSpan="5">'+
    '<textarea  placeholder="Unidad" name="unidad"></textarea>'+
'</td>'+
'<td rowSpan="5">'+
    '<select placeholder="seleccione" name="alineacion">'+
        '<option value="1">Estrategia</option>'+
        '<option value="2">Objetivo</option>'+
        '<option value="3">Meta</option>'+
        '<option value="4">Proceso</option>'+
    '</select>'+

'</td>'+
'<td rowSpan="5">'+
    '<textarea placeholder="Descripción" name="desAlineacion"class=""></textarea>'+
'</td>'+
'<td rowSpan="5">'+
    '<input type="text" placeholder="riesgo" name="riesgo"/>'+
'</td></tr>';
{/* <td rowSpan="5">
    <select placeholder="nivel" name="nivel">
        <option value="1">Estratégico</option>
        <option value="2">Directivo</option>
        <option value="3">Operativo</option>
    </select>
</td >
<td rowSpan="5">
    <select placeholder="seleccion" name="seleccion">
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
        <option value="11">De Tic"s</option>
        <option value="12">De Salud</option>
        <option value="13">De Corrupción</option>
        <option value="14">Otros</option>
    </select>
</td>
<td rowSpan="5">
    <input type="text" placeholder="otro" name="otro"/>
</td>
<td rowSpan="1">
    <input class="row" type="number" placeholder="No." name="numFactor"/><p/><p/>
</td>
<td rowSpan="1">
    <textarea aria-rowspan="1" name="descripcionF1" placeholder="Descripción"></textarea>
</td>
<td rowSpan="1">
    <select placeholder="Selecione" name="clasificacionFactor">
        <option value="0">Seleccione</option>
        <option value="1">Humano</option>
        <option value="2">Financiero - Presupuestal</option>
        <option value="3">Técnico - Administrativo</option>
        <option value="4">TIC"s</option>
        <option value="5">Material</option>
        <option value="6">Normativo</option>
        <option value="7">Entorno</option>
    </select>
</td>
<td rowSpan="1">
    <select name="tipoFactor0">
    <option value="">Seleccione</option>
    <option value="1">Interno</option>
    <option value="2">Externo</option>
    </select>
</td>
<td rowSpan="5" data-name="efecto">
    <textarea  name="efectoRiesgo" placeholder="Efecto" class=" w-full"></textarea>
</td>
<td rowSpan="5" data-name="desFactor">
    <textarea  name="descFactor" placeholder="Descripción" class=" w-full"></textarea>
</td>
<td rowSpan="5"  data-name="gradoImpacto">
    <select name="gradoImpacto0" placeholder="Selecione">
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
<td rowSpan="5">
    <input type="text" name="cuadrante0" placeholder="Cuadrante" class=" w-full"/>
</td>
<td rowSpan="5">
    <select name="tieneControles0">
    <option value="">Seleccione</option>
    <option value="1">SI</option>
    <option value="2">NO</option>
    </select>
</td>
<td rowSpan="1">
    <input type="text" name="numControl" placeholder="No." class=" w-full"/>
</td>
<td rowSpan="1" data-name="descripcionContol">
    <input type="text" name="desControl" placeholder="Descripción" class=" w-full"/>
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
    <input type="text" name="resultado0" placeholder="Determinación" />
</td>
<td rowSpan="1">pendiente</td>
<td rowSpan="5" data-name="gradoImpactoValoracion">
    <select name="gradoImpactoCaloracion0" placeholder="Selecione" class="">
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
<td rowSpan="5" data-name="probabilidadOcurrencia">
    <select name="probOcurrencia" placeholder="Selecione" class="">
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
<td rowSpan="5">
    pendiente
</td>
<td rowSpan="5">
    pendiente
</td>
<td rowSpan="5">
    pendiente
</td>
<td rowSpan="5">
    pendiente
</td>
<td rowSpan="5" data-name="estrategiaUsar">
    <select name="estrategia" placeholder="Selecione" class="">
        <option value="">Seleccione</option>
        <option value="1">Evitar el Riesgo</option>
        <option value="2">Reducir el Riesgo</option>
        <option value="3">Asumir el Resigo</option>
        <option value="4">Compartir el Riesgo</option>
    </select>
</td>
<td rowSpan="5" data-name="descripcionAccion">
    <textarea name="desAccion" placeholder="Descripción" class=""></textarea>
</td>
<td rowSpan="5" data-name="del">
    <button name="del0" class="btn btn-danger glyphicon glyphicon-remove row-remove" onclick="EliminarFila()"><span aria-hidden="true">×</span></button>
</td>
</tr>


<!-- Filas Factores -->
<tr rowSpan="4">
<td rowSpan="1">
    <input class="row" type="number" placeholder="No." name="numFactor"/><p/><p/>
</td>
<td rowSpan="1">
    <textarea aria-rowspan="1" name="descripcionF1" placeholder="Descripción"></textarea>
</td>
<td rowSpan="1">
    <select placeholder="Selecione" name="clasificacionFactor">
        <option value="0">Seleccione</option>
        <option value="1">Humano</option>
        <option value="2">Financiero - Presupuestal</option>
        <option value="3">Técnico - Administrativo</option>
        <option value="4">TIC"s</option>
        <option value="5">Material</option>
        <option value="6">Normativo</option>
        <option value="7">Entorno</option>
    </select>
</td>
<td rowSpan="1">
    <select name="tipoFactor0">
    <option value="">Seleccione</option>
    <option value="1">Interno</option>
    <option value="2">Externo</option>
    </select>
</td>
</tr>
<tr>
<td rowSpan="1">
    <input class="row" type="number" placeholder="No." name="numFactor"/><p/><p/>
</td>
<td rowSpan="1">
    <textarea aria-rowspan="1" name="descripcionF1" placeholder="Descripción"></textarea>
</td>
<td rowSpan="1">
    <select placeholder="Selecione" name="clasificacionFactor">
        <option value="0">Seleccione</option>
        <option value="1">Humano</option>
        <option value="2">Financiero - Presupuestal</option>
        <option value="3">Técnico - Administrativo</option>
        <option value="4">TIC"s</option>
        <option value="5">Material</option>
        <option value="6">Normativo</option>
        <option value="7">Entorno</option>
    </select>
</td>
<td rowSpan="1">
    <select name="tipoFactor0">
    <option value="">Seleccione</option>
    <option value="1">Interno</option>
    <option value="2">Externo</option>
    </select>
</td>
</tr>
<tr>
<td rowSpan="1">
    <input class="row" type="number" placeholder="No." name="numFactor"/><p/><p/>
</td>
<td rowSpan="1">
    <textarea aria-rowspan="1" name="descripcionF1" placeholder="Descripción"></textarea>
</td>
<td rowSpan="1">
    <select placeholder="Selecione" name="clasificacionFactor">
        <option value="0">Seleccione</option>
        <option value="1">Humano</option>
        <option value="2">Financiero - Presupuestal</option>
        <option value="3">Técnico - Administrativo</option>
        <option value="4">TIC"s</option>
        <option value="5">Material</option>
        <option value="6">Normativo</option>
        <option value="7">Entorno</option>
    </select>
</td>
<td rowSpan="1">
    <select name="tipoFactor0">
    <option value="">Seleccione</option>
    <option value="1">Interno</option>
    <option value="2">Externo</option>
    </select>
</td>
</tr>
<tr>
<td rowSpan="1">
    <input class="row" type="number" placeholder="No." name="numFactor"/><p/><p/>
</td>
<td rowSpan="1">
    <textarea aria-rowspan="1" name="descripcionF1" placeholder="Descripción"></textarea>
</td>
<td rowSpan="1">
    <select placeholder="Selecione">
        <option value="0">Seleccione</option>
        <option value="1">Humano</option>
        <option value="2">Financiero - Presupuestal</option>
        <option value="3">Técnico - Administrativo</option>
        <option value="4">TIC"s</option>
        <option value="5">Material</option>
        <option value="6">Normativo</option>
        <option value="7">Entorno</option>
    </select>
</td>
<td rowSpan="1">
    <select name="tipoFactor0">
    <option value="">Seleccione</option>
    <option value="1">Interno</option>
    <option value="2">Externo</option>
    </select>
</td>
</tr>';
 */}


//añado fila a la tabla

$(".tabla-mr").append(fila);

});


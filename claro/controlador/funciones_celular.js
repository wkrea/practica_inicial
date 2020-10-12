function agregardatos(id_celular, celularNombre, celularPrecioContado, celularPrecioCuotas, celularValorCuota, celularTamPantalla, celularCamaraP, celularCamaraS, celularVideo, celularCapMemoInterna, celularCapMemoRAM, celularBateria, celularTiempoCarga, celularSistemaOperativo, celularFuente, celularImagen, celularcasa){
    cadena = "id_celular=" + id_celular +
    "&celularNombre=" + celularNombre +
    "&celularPrecioContado=" + celularPrecioContado +
    "&celularPrecioCuotas=" + celularPrecioCuotas +
    "&celularValorCuota=" + celularValorCuota +
    "&celularTamPantalla=" + celularTamPantalla +
    "&celularCamaraP=" + celularCamaraP +
    "&celularCamaraS=" + celularCamaraS +
    "&celularVideo=" + celularVideo +
    "&celularCapMemoInterna=" + celularCapMemoInterna +
    "&celularCapMemoRAM=" + celularCapMemoRAM +
    "&celularBateria=" + celularBateria +
    "&celularTiempoCarga=" + celularTiempoCarga +
    "&celularSistemaOperativo=" + celularSistemaOperativo +
    "&celularFuente=" + celularFuente +
    "&celularImagen=" + celularImagen +
    "&celularcasa=" + celularcasa;

    accion = "insertar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#id_celularu').val(d[0]);
    $('#celularNombreu').val(d[1]);
    $('#celularPrecioContadou').val(d[2]);
    $('#celularPrecioCuotasu').val(d[3]);
    $('#celularValorCuotau').val(d[4]);
    $('#celularTamPantallau').val(d[5]);
    $('#celularCamaraPu').val(d[6]);
    $('#celularCamaraSu').val(d[7]);
    $('#celularVideou').val(d[8]);
    $('#celularCapMemoInternau').val(d[9]);
    $('#celularCapMemoRAMu').val(d[10]);
    $('#celularBateriau').val(d[11]);
    $('#celularTiempoCargau').val(d[12]);
    $('#celularSistemaOperativou').val(d[13]);
    $('#celularFuenteu').val(d[14]);
    $('#celularImagenu').val(d[15]);
    $('#celularcasau').val(d[16]);
}

function modificarCliente(){
    id_celular = $('#id_celularu').val();
    celularNombre = $('#celularNombreu').val();
    celularPrecioContado = $('#celularPrecioContadou').val();
    celularPrecioCuotas = $('#celularPrecioCuotasu').val();
    celularValorCuota = $('#celularValorCuotau').val();
    celularTamPantalla = $('#celularTamPantallau').val();
    celularCamaraP = $('#celularCamaraPu').val();
    celularCamaraS = $('#celularCamaraSu').val();
    celularVideo = $('#celularVideou').val();
    celularCapMemoInterna = $('#celularCapMemoInternau').val();
    celularCapMemoRAM = $('#celularCapMemoRAMu').val();
    celularBateria = $('#celularBateriau').val();
    celularTiempoCarga = $('#celularTiempoCargau').val();
    celularSistemaOperativo = $('#celularSistemaOperativou').val();
    celularFuente = $('#celularFuenteu').val();
    celularImagen = $('#celularImagenu').val();
    celularcasa = $('#celularcasau').val();
    cadena = "id_celular=" + id_celular +
    "&celularNombre=" + celularNombre +
    "&celularPrecioContado=" + celularPrecioContado +
    "&celularPrecioCuotas=" + celularPrecioCuotas +
    "&celularValorCuota=" + celularValorCuota +
    "&celularTamPantalla=" + celularTamPantalla +
    "&celularCamaraP=" + celularCamaraP +
    "&celularCamaraS=" + celularCamaraS +
    "&celularVideo=" + celularVideo +
    "&celularCapMemoInterna=" + celularCapMemoInterna +
    "&celularCapMemoRAM=" + celularCapMemoRAM +
    "&celularBateria=" + celularBateria +
    "&celularTiempoCarga=" + celularTiempoCarga +
    "&celularSistemaOperativo=" + celularSistemaOperativo +
    "&celularFuente=" + celularFuente +
    "&celularImagen=" + celularImagen +
    "&celularcasa=" + celularcasa;

    accion = "modificar";
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function preguntarSiNo(id_celular) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        eliminarDatos(id_celular);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function eliminarDatos(id_celular) {
    cadena = "id_celular=" + id_celular;

    accion = "borrar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function a_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../modelo/celular_modelo.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
            $('#tabla').load('../vista/componentes/vista_celular.php');
                alert(mensaje_si);
            } else {
                alert(mensaje_no);
            }
        }
    });
}

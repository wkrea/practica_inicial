<br><br><br><br>
<script>
var datos = [""];
function datosdeentrada(){
<?php
include_once '../../modelo/conexion.php';
$conn = conexion();
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM celular";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $i = 0;
    while($row = $result->fetch_assoc()) {
    ?>
/* inserta los datos en una matriz de javascript */
        datos[<?php echo $i; ?>] = [
            "<?php echo $row['id_celular']; ?>",
            "<?php echo $row['celularNombre']; ?>",
            "<?php echo $row['celularPrecioContado']; ?>",
            "<?php echo $row['celularPrecioCuotas']; ?>",
            "<?php echo $row['celularValorCuota']; ?>",
            "<?php echo $row['celularTamPantalla']; ?>",
            "<?php echo $row['celularCamaraP']; ?>",
            "<?php echo $row['celularCamaraS']; ?>",
            "<?php echo $row['celularVideo']; ?>",
            "<?php echo $row['celularCapMemoInterna']; ?>",
            "<?php echo $row['celularCapMemoRAM']; ?>",
            "<?php echo $row['celularBateria']; ?>",
            "<?php echo $row['celularTiempoCarga']; ?>",
            "<?php echo $row['celularSistemaOperativo']; ?>",
            "<?php echo $row['celularFuente']; ?>",
            "<?php echo $row['celularImagen']; ?>",
            "<?php echo $row['celularcasa']; ?>"
        ];
<?php
    $i = $i+1;     
}
} else {
    echo "0 results";
}

$conn->close();
?>
}
datosdeentrada();
console.log(datos);
</script>

    









<div id="row"></div>











<script>

function datosdesalida(){

    function addElement() {
        var row = document.getElementById("row");

        var div1 = document.createElement("div");
        var table = document.createElement("table");

        var trid_celular = document.createElement("tr");
        var trcelularNombre = document.createElement("tr");
        var trcelularPrecioContado = document.createElement("tr");
        var trcelularPrecioCuotas = document.createElement("tr");
        var trcelularValorCuota = document.createElement("tr");
        var trcelularTamPantalla = document.createElement("tr");
        var trcelularCamaraP = document.createElement("tr");
        var trcelularCamaraS = document.createElement("tr");
        var trcelularVideo = document.createElement("tr");
        var trcelularCapMemoInterna = document.createElement("tr");
        var trcelularCapMemoRAM = document.createElement("tr");
        var trcelularBateria = document.createElement("tr");
        var trcelularTiempoCarga = document.createElement("tr");
        var trcelularSistemaOperativo = document.createElement("tr");
        var trcelularFuente = document.createElement("tr");
        var trcelularImagen = document.createElement("tr");
        var trcelularcasa = document.createElement("tr");

        var tdid_celular = document.createElement("td");
        var tdcelularNombre = document.createElement("td");
        var tdcelularPrecioContado = document.createElement("td");
        var tdcelularPrecioCuotas = document.createElement("td");
        var tdcelularValorCuota = document.createElement("td");
        var tdcelularTamPantalla = document.createElement("td");
        var tdcelularCamaraP = document.createElement("td");
        var tdcelularCamaraS = document.createElement("td");
        var tdcelularVideo = document.createElement("td");
        var tdcelularCapMemoInterna = document.createElement("td");
        var tdcelularCapMemoRAM = document.createElement("td");
        var tdcelularBateria = document.createElement("td");
        var tdcelularTiempoCarga = document.createElement("td");
        var tdcelularSistemaOperativo = document.createElement("td");
        var tdcelularFuente = document.createElement("td");
        var tdcelularImagen = document.createElement("td");
        var tdcelularcasa = document.createElement("td");

        var tddatoid_celular = document.createElement("td");
        var tddatocelularNombre = document.createElement("td");
        var tddatocelularPrecioContado = document.createElement("td");
        var tddatocelularPrecioCuotas = document.createElement("td");
        var tddatocelularValorCuota = document.createElement("td");
        var tddatocelularTamPantalla = document.createElement("td");
        var tddatocelularCamaraP = document.createElement("td");
        var tddatocelularCamaraS = document.createElement("td");
        var tddatocelularVideo = document.createElement("td");
        var tddatocelularCapMemoInterna = document.createElement("td");
        var tddatocelularCapMemoRAM = document.createElement("td");
        var tddatocelularBateria = document.createElement("td");
        var tddatocelularTiempoCarga = document.createElement("td");
        var tddatocelularSistemaOperativo = document.createElement("td");
        var tddatocelularFuente = document.createElement("td");
        var tddatocelularImagen = document.createElement("td");
        var tddatocelularcasa = document.createElement("td");


        tdid_celular.className              = "tdid_celular";
        tdcelularNombre.className           = "tdcelularNombre";
        tdcelularPrecioContado.className    = "tdcelularPrecioContado"; 
        tdcelularPrecioCuotas.className     = "tdcelularPrecioCuotas"; 
        tdcelularValorCuota.className       = "tdcelularValorCuota"; 
        tdcelularTamPantalla.className      = "tdcelularTamPantalla"; 
        tdcelularCamaraP.className          = "tdcelularCamaraP";
        tdcelularCamaraS.className          = "tdcelularCamaraS";
        tdcelularVideo.className            = "tdcelularVideo";
        tdcelularCapMemoInterna.className   = "tdcelularCapMemoInterna";
        tdcelularCapMemoRAM.className       = "tdcelularCapMemoRAM";
        tdcelularBateria.className          = "tdcelularBateria";
        tdcelularTiempoCarga.className      = "tdcelularTiempoCarga";
        tdcelularSistemaOperativo.className = "tdcelularSistemaOperativo";
        tdcelularFuente.className           = "tdcelularFuente";
        tdcelularImagen.className           = "tdcelularImagen";
        tdcelularcasa.className             = "tdcelularcasa";

        tddatoid_celular.className              = "tddatoid_celular";
        tddatocelularNombre.className           = "tddatocelularNombre";
        tddatocelularPrecioContado.className    = "tddatocelularPrecioContado"; 
        tddatocelularPrecioCuotas.className     = "tddatocelularPrecioCuotas"; 
        tddatocelularValorCuota.className       = "tddatocelularValorCuota"; 
        tddatocelularTamPantalla.className      = "tddatocelularTamPantalla"; 
        tddatocelularCamaraP.className          = "tddatocelularCamaraP";
        tddatocelularCamaraS.className          = "tddatocelularCamaraS";
        tddatocelularVideo.className            = "tddatocelularVideo";
        tddatocelularCapMemoInterna.className   = "tddatocelularCapMemoInterna";
        tddatocelularCapMemoRAM.className       = "tddatocelularCapMemoRAM";
        tddatocelularBateria.className          = "tddatocelularBateria";
        tddatocelularTiempoCarga.className      = "tddatocelularTiempoCarga";
        tddatocelularSistemaOperativo.className = "tddatocelularSistemaOperativo";
        tddatocelularFuente.className           = "tddatocelularFuente";
        tddatocelularImagen.className           = "tddatocelularImagen";
        tddatocelularcasa.className             = "tddatocelularcasa";

        trid_celular.appendChild(tdid_celular);
        trcelularNombre.appendChild(tdcelularNombre);
        trcelularPrecioContado.appendChild(tdcelularPrecioContado);
        trcelularPrecioCuotas.appendChild(tdcelularPrecioCuotas);
        trcelularValorCuota.appendChild(tdcelularValorCuota);
        trcelularTamPantalla.appendChild(tdcelularTamPantalla);
        trcelularCamaraP.appendChild(tdcelularCamaraP);
        trcelularCamaraS.appendChild(tdcelularCamaraS);
        trcelularVideo.appendChild(tdcelularVideo);
        trcelularCapMemoInterna.appendChild(tdcelularCapMemoInterna);
        trcelularCapMemoRAM.appendChild(tdcelularCapMemoRAM);
        trcelularBateria.appendChild(tdcelularBateria);
        trcelularTiempoCarga.appendChild(tdcelularTiempoCarga);
        trcelularSistemaOperativo.appendChild(tdcelularSistemaOperativo);
        trcelularFuente.appendChild(tdcelularFuente);
        trcelularImagen.appendChild(tdcelularImagen);
        trcelularcasa.appendChild(tdcelularcasa);

        trid_celular.appendChild(tddatoid_celular);
        trcelularNombre.appendChild(tddatocelularNombre);
        trcelularPrecioContado.appendChild(tddatocelularPrecioContado);
        trcelularPrecioCuotas.appendChild(tddatocelularPrecioCuotas);
        trcelularValorCuota.appendChild(tddatocelularValorCuota);
        trcelularTamPantalla.appendChild(tddatocelularTamPantalla);
        trcelularCamaraP.appendChild(tddatocelularCamaraP);
        trcelularCamaraS.appendChild(tddatocelularCamaraS);
        trcelularVideo.appendChild(tddatocelularVideo);
        trcelularCapMemoInterna.appendChild(tddatocelularCapMemoInterna);
        trcelularCapMemoRAM.appendChild(tddatocelularCapMemoRAM);
        trcelularBateria.appendChild(tddatocelularBateria);
        trcelularTiempoCarga.appendChild(tddatocelularTiempoCarga);
        trcelularSistemaOperativo.appendChild(tddatocelularSistemaOperativo);
        trcelularFuente.appendChild(tddatocelularFuente);
        trcelularImagen.appendChild(tddatocelularImagen);
        trcelularcasa.appendChild(tddatocelularcasa);

        table.appendChild(trid_celular);
        table.appendChild(trcelularNombre);
        table.appendChild(trcelularPrecioContado);
        table.appendChild(trcelularPrecioCuotas);
        table.appendChild(trcelularValorCuota);
        table.appendChild(trcelularTamPantalla);
        table.appendChild(trcelularCamaraP);
        table.appendChild(trcelularCamaraS);
        table.appendChild(trcelularVideo);
        table.appendChild(trcelularCapMemoInterna);
        table.appendChild(trcelularCapMemoRAM);
        table.appendChild(trcelularBateria);
        table.appendChild(trcelularTiempoCarga);
        table.appendChild(trcelularSistemaOperativo);
        table.appendChild(trcelularFuente);
        table.appendChild(trcelularImagen);
        table.appendChild(trcelularcasa);

        div1.appendChild(table);

        row.appendChild(div1);        
    }
    
    // exposición de datos
    function myFunction2(i) {
        for(ii=0;datos[i].length>ii;ii++){
            document.getElementsByClassName("tdid_celular")[i].innerHTML = "tdid_celular";
            document.getElementsByClassName("tdcelularNombre")[i].innerHTML = "tdcelularNombre";
            document.getElementsByClassName("tdcelularPrecioContado")[i].innerHTML = "tdcelularPrecioContado";
            document.getElementsByClassName("tdcelularPrecioCuotas")[i].innerHTML = "tdcelularPrecioCuotas";
            document.getElementsByClassName("tdcelularValorCuota")[i].innerHTML = "tdcelularValorCuota";

            document.getElementsByClassName("tdcelularTamPantalla")[i].innerHTML = "tdcelularTamPantalla";
            document.getElementsByClassName("tdcelularCamaraP")[i].innerHTML = "tdcelularCamaraP";
            document.getElementsByClassName("tdcelularCamaraS")[i].innerHTML = "tdcelularCamaraS";
            document.getElementsByClassName("tdcelularVideo")[i].innerHTML = "tdcelularVideo";
            document.getElementsByClassName("tdcelularCapMemoInterna")[i].innerHTML = "tdcelularCapMemoInterna";

            document.getElementsByClassName("tdcelularCapMemoRAM")[i].innerHTML = "tdcelularCapMemoRAM";
            document.getElementsByClassName("tdcelularBateria")[i].innerHTML = "tdcelularBateria";
            document.getElementsByClassName("tdcelularTiempoCarga")[i].innerHTML = "tdcelularTiempoCarga";
            document.getElementsByClassName("tdcelularSistemaOperativo")[i].innerHTML = "tdcelularSistemaOperativo";
            document.getElementsByClassName("tdcelularFuente")[i].innerHTML = "tdcelularFuente";

            document.getElementsByClassName("tdcelularImagen")[i].innerHTML = "tdcelularImagen";
            document.getElementsByClassName("tdcelularcasa")[i].innerHTML = "tdcelularcasa";


            document.getElementsByClassName("tddatoid_celular")[i].innerHTML = datos[i][0];
            document.getElementsByClassName("tddatocelularNombre")[i].innerHTML = datos[i][1];
            document.getElementsByClassName("tddatocelularPrecioContado")[i].innerHTML = datos[i][2];
            document.getElementsByClassName("tddatocelularPrecioCuotas")[i].innerHTML = datos[i][3];
            document.getElementsByClassName("tddatocelularValorCuota")[i].innerHTML = datos[i][4];

            document.getElementsByClassName("tddatocelularTamPantalla")[i].innerHTML = datos[i][5];
            document.getElementsByClassName("tddatocelularCamaraP")[i].innerHTML = datos[i][6];
            document.getElementsByClassName("tddatocelularCamaraS")[i].innerHTML = datos[i][7];
            document.getElementsByClassName("tddatocelularVideo")[i].innerHTML = datos[i][8];
            document.getElementsByClassName("tddatocelularCapMemoInterna")[i].innerHTML = datos[i][9];

            document.getElementsByClassName("tddatocelularCapMemoRAM")[i].innerHTML = datos[i][10];
            document.getElementsByClassName("tddatocelularBateria")[i].innerHTML = datos[i][11];
            document.getElementsByClassName("tddatocelularTiempoCarga")[i].innerHTML = datos[i][12];
            document.getElementsByClassName("tddatocelularSistemaOperativo")[i].innerHTML = datos[i][13];
            document.getElementsByClassName("tddatocelularFuente")[i].innerHTML = datos[i][14];

            document.getElementsByClassName("tddatocelularImagen")[i].innerHTML = datos[i][15];
            document.getElementsByClassName("tddatocelularcasa")[i].innerHTML = datos[i][16];

        }
    }

    for(i=0;datos.length>i;i++){
        addElement(); 
    }

    for(i=0;datos.length>i;i++){
        myFunction2(i); 
    } 



}

datosdesalida();











</script>









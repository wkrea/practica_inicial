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
<script>
function datosdesalida(){

    function addElement() {
        var zona = document.getElementById("tablezona");

        var tr = document.createElement("tr");

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

        var hxid_celular = document.createElement("h5");
        var hxcelularNombre = document.createElement("h5");
        var hxcelularPrecioContado = document.createElement("h5");
        var hxcelularPrecioCuotas = document.createElement("h5");
        var hxcelularValorCuota = document.createElement("h5");
        var hxcelularTamPantalla = document.createElement("h5");
        var hxcelularCamaraP = document.createElement("h5");
        var hxcelularCamaraS = document.createElement("h5");
        var hxcelularVideo = document.createElement("h5");
        var hxcelularCapMemoInterna = document.createElement("h5");
        var hxcelularCapMemoRAM = document.createElement("h5");
        var hxcelularBateria = document.createElement("h5");
        var hxcelularTiempoCarga = document.createElement("h5");
        var hxcelularSistemaOperativo = document.createElement("h5");
        var hxcelularFuente = document.createElement("h5");
        var hxcelularImagen = document.createElement("h5");
        var hxcelularcasa = document.createElement("h5");

        hxid_celular.className = "hxid_celular";
        hxcelularNombre.className = "hxcelularNombre";
        hxcelularPrecioContado.className    = "hxcelularPrecioContado"; 
        hxcelularPrecioCuotas.className     = "hxcelularPrecioCuotas"; 
        hxcelularValorCuota.className       = "hxcelularValorCuota"; 
        hxcelularTamPantalla.className      = "hxcelularTamPantalla"; 
        hxcelularCamaraP.className          = "hxcelularCamaraP";
        hxcelularCamaraS.className          = "hxcelularCamaraS";
        hxcelularVideo.className            = "hxcelularVideo";
        hxcelularCapMemoInterna.className   = "hxcelularCapMemoInterna";
        hxcelularCapMemoRAM.className       = "hxcelularCapMemoRAM";
        hxcelularBateria.className          = "hxcelularBateria";
        hxcelularTiempoCarga.className      = "hxcelularTiempoCarga";
        hxcelularSistemaOperativo.className = "hxcelularSistemaOperativo";
        hxcelularFuente.className           = "hxcelularFuente";
        hxcelularImagen.className           = "hxcelularImagen";
        hxcelularcasa.className             = "hxcelularcasa";

        tdid_celular.appendChild(hxid_celular);
        tdcelularNombre.appendChild(hxcelularNombre);
        tdcelularPrecioContado.appendChild(hxcelularPrecioCuotas);
        tdcelularPrecioCuotas.appendChild(hxcelularPrecioContado);
        tdcelularValorCuota.appendChild(hxcelularValorCuota);
        tdcelularTamPantalla.appendChild(hxcelularTamPantalla);
        tdcelularCamaraP.appendChild(hxcelularCamaraP);
        tdcelularCamaraS.appendChild(hxcelularCamaraS);
        tdcelularVideo.appendChild(hxcelularVideo);
        tdcelularCapMemoInterna.appendChild(hxcelularCapMemoInterna);
        tdcelularCapMemoRAM.appendChild(hxcelularCapMemoRAM);
        tdcelularBateria.appendChild(hxcelularBateria);
        tdcelularTiempoCarga.appendChild(hxcelularTiempoCarga);
        tdcelularSistemaOperativo.appendChild(hxcelularSistemaOperativo);
        tdcelularFuente.appendChild(hxcelularFuente);
        tdcelularImagen.appendChild(hxcelularImagen);
        tdcelularcasa.appendChild(hxcelularcasa);    

        tr.appendChild(tdid_celular);
        tr.appendChild(tdcelularNombre);
        tr.appendChild(tdcelularPrecioContado);
        tr.appendChild(tdcelularPrecioCuotas);
        tr.appendChild(tdcelularValorCuota);
        tr.appendChild(tdcelularTamPantalla);
        tr.appendChild(tdcelularCamaraP);
        tr.appendChild(tdcelularCamaraS);
        tr.appendChild(tdcelularVideo);
        tr.appendChild(tdcelularCapMemoInterna);
        tr.appendChild(tdcelularCapMemoRAM);
        tr.appendChild(tdcelularBateria);
        tr.appendChild(tdcelularTiempoCarga);
        tr.appendChild(tdcelularSistemaOperativo);
        tr.appendChild(tdcelularFuente);
        tr.appendChild(tdcelularImagen);
        tr.appendChild(tdcelularcasa); 

        zona.appendChild(tr);
    }

    // exposición de datos
    function myFunction2(i) {
        for(ii=0;datos[i].length>ii;ii++){
            document.getElementsByClassName("hxid_celular")[i].innerHTML = datos[i][0];
            document.getElementsByClassName("hxcelularNombre")[i].innerHTML = datos[i][1];
            document.getElementsByClassName("hxcelularPrecioContado")[i].innerHTML = datos[i][2];
            document.getElementsByClassName("hxcelularPrecioCuotas")[i].innerHTML = datos[i][3];
            document.getElementsByClassName("hxcelularValorCuota")[i].innerHTML = datos[i][4];

            document.getElementsByClassName("hxcelularTamPantalla")[i].innerHTML = datos[i][5];
            document.getElementsByClassName("hxcelularCamaraP")[i].innerHTML = datos[i][6];
            document.getElementsByClassName("hxcelularCamaraS")[i].innerHTML = datos[i][7];
            document.getElementsByClassName("hxcelularVideo")[i].innerHTML = datos[i][8];
            document.getElementsByClassName("hxcelularCapMemoInterna")[i].innerHTML = datos[i][9];

            document.getElementsByClassName("hxcelularCapMemoRAM")[i].innerHTML = datos[i][10];
            document.getElementsByClassName("hxcelularBateria")[i].innerHTML = datos[i][11];
            document.getElementsByClassName("hxcelularTiempoCarga")[i].innerHTML = datos[i][12];
            document.getElementsByClassName("hxcelularSistemaOperativo")[i].innerHTML = datos[i][13];
            document.getElementsByClassName("hxcelularFuente")[i].innerHTML = datos[i][14];

            document.getElementsByClassName("hxcelularImagen")[i].innerHTML = datos[i][15];
            document.getElementsByClassName("hxcelularcasa")[i].innerHTML = datos[i][16];


        }
    }

    for(i=0;datos.length>i;i++){
        addElement(); 
    }

    for(i=0;datos.length>i;i++){
        myFunction2(i); 
    }    
}
</script>

<script>
datosdeentrada();
</script>
<table class="table table-hover table-condensed table-bordered table-responsive" id="tablezona"></table>
<script>
datosdesalida();
</script>